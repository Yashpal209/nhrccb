<?php

namespace App\Http\Controllers\Admin\Publication;

use App\Http\Controllers\Controller;
use App\Models\Admin\Publication\Journal;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function addJournal()
    {
        return view('admin.pages.publication.journal.addJournal');
    }

    public function postJournal(Request $req)
    {
        $journal = new Journal();
        $journal->title = $req->input('title');
        $journal->date = $req->input('date');
        $res =  $journal->save();

        if ($req->hasFile('journal')) {
            $file = $req->file('journal');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationPath = 'uploads/publication/journal/';
            $file->move($destinationPath, $name);
            $journal->journal = $destinationPath . $name;
            $journal->save();
        }
        if ($res) {
            return redirect()->route('addJournal')->with('alert', 'Journal Added successfully!');
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }

    public function viewJournal()
    {
        $journal = Journal::orderBy('created_at', 'desc')->paginate(10); // 10 items per page
        return view('admin.pages.publication.journal.viewJournal', compact('journal'))
            ->with('no', ($journal->currentPage() - 1) * $journal->perPage() + 1);
    }

    public function deleteJournal($id)
{
    $journal = Journal::find($id);
    if ($journal) {
        $imagePath = $journal->journal; 
        if (!empty($imagePath) && File::exists($imagePath)) {
            File::delete($imagePath);
        }
        $journal->delete();
        return redirect()->route('viewJournal')->with('alert', 'Data deleted Successfully');
    } else {
        return redirect()->back()->with('error', 'Permission denied');
    }
}
}
