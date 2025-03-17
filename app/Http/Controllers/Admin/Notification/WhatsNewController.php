<?php

namespace App\Http\Controllers\Admin\Notification;

use App\Http\Controllers\Controller;
use App\Models\Admin\Notification\WhatsNew;
use Illuminate\Http\Request;

class WhatsNewController extends Controller
{
    public function addWhatsNew()
    {
        return view('admin.pages.notification.whatsnew.addWhatsNew');
    }

    public function postWhatsNew(Request $req)
    {
        $notification = new WhatsNew();
        $notification->title = $req->input('title');
        $notification->date = $req->input('date');
        $res = $notification->save();

        if ($req->hasFile('file')) {
            $file = $req->file('file');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationPath = 'uploads/whatsnew/';
            $file->move($destinationPath, $name);

            $notification->file = $destinationPath . $name;
            $notification->save();
        }

        if ($res) {
            return redirect()->route('viewWhatsNew')->with('alert', 'Whats New Updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }


    public function viewWhatsNew()
    {
        $notifications = WhatsNew::orderBy('date', 'desc')->get();
        $data = compact('notifications');
        return view('admin.pages.notification.whatsnew.viewWhatsnew')->with($data)->with('no', '1');
    }

    public function deleteWhatsNew($id)
    {  
        $notifications = WhatsNew::find($id);
        $notifications->delete();
        if ($notifications) {
            return redirect()->route('viewWhatsNew')->with('alert', 'Whats New Deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }
}
