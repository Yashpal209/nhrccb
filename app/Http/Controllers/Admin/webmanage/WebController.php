<?php

namespace App\Http\Controllers\admin\webmanage;

use App\Http\Controllers\Controller;
use App\Models\Admin\Webmanage\Banner;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function banner()
    {
        return view('admin.pages.webmanage.banner');    
    }
    public function addBannerPost(Request $request)
    {
        $Banner = new Banner();
        $Banner->title = $request->input('title');
        $Banner->link = $request->input('link');
        

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationPath = 'uploads/banner/';
            $file->move($destinationPath, $name);
            $Banner->image = $destinationPath . $name;
            $Banner->save();
        }
        $request = $Banner->save();
        if ($request) {
            return redirect()->route('viewBanner')->with('alert', 'Banner Added successfully!');
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }


    public function viewBanner()
    {
        $banners = Banner::all();
        // return $banners;
        return view('admin.pages.webmanage.viewBanner', compact('banners'));
    }

    public function deleteBanner($id)
    {
        $banners = Banner::find($id);
        $banners->delete();
        if ($banners) {
            return redirect()->route('viewBanner')->with('alert', 'Application Deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }
}
