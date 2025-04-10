<?php

namespace App\Http\Controllers\Admin\Notification;

use App\Http\Controllers\Controller;
use App\Models\Admin\Notification\LatestUpdate;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class LatestUpdateController extends Controller
{
    public function addLatestUpdate()
    {
        return view('admin.pages.notification.latestUpdate.addLatestUpdate');
    }

    public function postLatestUpdate(Request $req)
    {
        // dump($request->all());
        $notification = new LatestUpdate();
        $notification->title = $req->input('title');
        $notification->date = $req->input('date');
        $res = $notification->save();

        if ($req->hasFile('file')) {
            $file = $req->file('file');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationPath = 'uploads/latestupdate/';
            $file->move($destinationPath, $name);


            $notification->file = $destinationPath . $name;
            $notification->save();
        }

        if ($res) {
            return redirect()->route('viewLatestUpdate')->with('alert', 'Latest Update Updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }


    public function viewLatestUpdate()
    {
        $notifications = LatestUpdate::orderBy('date', 'desc')->get();
        $data = compact('notifications');
        return view('admin.pages.notification.latestUpdate.viewLatestUpdate')->with($data)->with('no', '1');
    }


    public function deleteLatestUpdate($id)
    {
        $notifications = LatestUpdate::find($id);
        if ($notifications) {
            $filePath = $notifications->file; 
            if (!empty($filePath) && File::exists($filePath)) {
                File::delete($filePath);
            }
            $notifications->delete();
            return redirect()->route('viewLatestUpdate')->with('alert', 'Latest Update deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }
}
