<?php

namespace App\Http\Controllers\Admin\WebManage;

use App\Http\Controllers\Controller;
use App\Models\Admin\WebManage\Banner;
use App\Models\Admin\WebManage\President;
use App\Models\Admin\WebManage\Whoswho;
use Illuminate\Http\Request;

class WebManageController extends Controller
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
        $banners = Banner::paginate(10);
        return view('admin.pages.webmanage.viewBanner', compact('banners'));
    }

    public function updateBannerPost(Request $request)
    {
        $banner = Banner::find($request->id);
        if (!$banner) {
            return redirect()->back()->with('error', 'Banner not found!');
        }

        $banner->title = $request->title;
        $banner->link = $request->link;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationPath = 'uploads/banner/';
            if (file_exists(public_path($banner->image))) {
                unlink(public_path($banner->image));
            }
            $file->move($destinationPath, $name);
            $banner->image = $destinationPath . $name;
        }

        $banner->save();

        return redirect()->route('viewBanner')->with('alert', 'Banner updated successfully!');
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


    public function editBanner($id)
    {
        $banners = Banner::find($id);
        return view('admin.pages.webmanage.editBanner', compact('banners'));
    }
    public function president()
    {
        return view('admin.pages.webmanage.president');
    }
    public function addpresidentPost(Request $request)
    {
        $President = new President();
        $President->type = $request->input('type');
        $President->text = $request->input('text');


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationPath = 'uploads/president/';
            $file->move($destinationPath, $name);
            $President->image = $destinationPath . $name;
            $President->save();
        }
        $request = $President->save();
        if ($request) {
            return redirect()->route('viewPresident')->with('alert', 'President Added successfully!');
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }

    public function viewPresident()
    {
        $President = President::paginate(10);
        return view('admin.pages.webmanage.viewPresident', compact('President'));
    }
    public function deletePresident($id)
    {
        $Presidents = President::find($id);
        $Presidents->delete();
        if ($Presidents) {
            return redirect()->route('viewPresident')->with('alert', ' message Deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }

    public function addWhosWho(){
        return view('admin.pages.webmanage.whoswho');
    }


    public function postWhosWho(Request $request)
    {
        $whoswho = new Whoswho();
        // return $request;
        $whoswho->type = $request->input('type');
        $whoswho->name = $request->input('name');
        $whoswho->post = $request->input('post');
        $whoswho->position = $request->input('position');


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationPath = 'uploads/whoswho/';
            $file->move($destinationPath, $name);
            $whoswho->image = $destinationPath . $name;
            $whoswho->save();
        }
        $request = $whoswho->save();
        if ($request) {
            return redirect()->route('addWhosWho')->with('alert', 'whoswho Added successfully!');
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }

    public function viewWhosWho()
    {
        $whoswho = Whoswho::paginate(10);
        return view('admin.pages.webmanage.viewWhoswho', compact('whoswho'));
    }

}
