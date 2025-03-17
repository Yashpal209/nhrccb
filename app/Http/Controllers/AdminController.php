<?php

namespace App\Http\Controllers;

use App\Models\Admin\Notification; 

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Render the officialNotification view
    public function officialNotification()
    {
        return view('admin.pages.officialNotification');
    }

    public function OfficialNotificationPost(Request $req)
    {
        $notification = new Notification();
        $notification->title = $req->input('title');
        $notification->date = $req->input('date');
        $res = $notification->save();

        if ($req->hasFile('noticefile')) {
            $file = $req->file('noticefile');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationPath = 'uploads/notification/';
            $file->move($destinationPath, $name);

            // Update the notification record with the file path
            $notification->noticefile = $destinationPath . $name;
            $notification->save();
        }

        if ($res) {
            return redirect('/admin/official-notification')->with('alert', 'Notification updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }

    public function notificationList()
    {

        $notifications = Notification::orderBy('created_at', 'desc')->take(5)->get();

        $data = compact('notifications');
        return view('admin.pages.officialNotification')->with($data);
    }

    public function notificationListview()
    {

        $notifications = Notification::orderBy('date', 'desc')->get();
        $data = compact('notifications');
        return view('admin.pages.viewofficialnotification')->with($data)->with('no', '1');
    }

    public function delete($id)
    {
        // return $id;
        $notifications = Notification::find($id);
        $notifications->delete();
        if ($notifications) {
            return redirect()->route('officialNotificationview')->with('alert', 'Notification Deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }
}
