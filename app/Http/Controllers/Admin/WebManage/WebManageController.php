<?php

namespace App\Http\Controllers\Admin\WebManage;

use App\Http\Controllers\Controller;
// use App\Models\Admin\WebManage\President;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class WebManageController extends Controller
{
    public function banner()
    {
        return view('admin.pages.webmanage.banner');
    }
    public function viewBanner()
    {
        $banners = DB::table('banners')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.pages.webmanage.viewBanner', compact('banners'));
    }
    public function addBannerPost(Request $request)
    {
        $data = [
            'title' => $request->input('title'),
            'link' => $request->input('link'),
            'created_at' => now(),
            'updated_at' => now()
        ];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationPath = 'uploads/banner/';
            $file->move($destinationPath, $name);
            $data['image'] = $destinationPath . $name;
        }

        $inserted = DB::table('banners')->insert($data);

        if ($inserted) {
            return redirect()->route('viewBanner')->with('alert', 'Banner added successfully!');
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }

    public function updateBannerPost(Request $request)
    {
        $banner = DB::table('banners')->where('id', $request->id)->first();

        if (!$banner) {
            return redirect()->back()->with('error', 'Banner not found!');
        }

        $data = [
            'title' => $request->input('title'),
            'link' => $request->input('link'),
            'updated_at' => now()
        ];

        if ($request->hasFile('image')) {
            if (File::exists($banner->image)) {
                File::delete($banner->image);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $name = uniqid() . "." . $ext;
            $destinationPath = 'uploads/banner/';
            $file->move($destinationPath, $name);
            $data['image'] = $destinationPath . $name;
        }

        DB::table('banners')->where('id', $request->id)->update($data);

        return redirect()->route('viewBanner')->with('alert', 'Banner updated successfully!');
    }

    public function deleteBanner($id)
    {
        $banner = DB::table('banners')->where('id', $id)->first();

        if ($banner) {
            if (File::exists($banner->image)) {
                File::delete($banner->image);
            }
            DB::table('banners')->where('id', $id)->delete();
            return redirect()->route('viewBanner')->with('alert', 'Banner deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Banner not found or permission denied.');
        }
    }

    public function editBanner($id)
    {
        $banners = DB::table('banners')->where('id', $id)->first();
        return view('admin.pages.webmanage.editBanner', compact('banners'));
    }



    // president 
    public function president()
    {
        return view('admin.pages.webmanage.president');
    }
    
    public function addPresidentPost(Request $request)
    {
        $data = [
            'type' => $request->input('type'),
            'text' => $request->input('text'),
            'created_at' => now(),
            'updated_at' => now()
        ];
    
        $inserted = DB::table('presidents')->insert($data);
    
        if ($inserted) {
            return redirect()->route('viewPresident')->with('alert', 'President added successfully!');
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }
    
    public function viewPresident()
    {
        $presidents = DB::table('presidents')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.pages.webmanage.viewPresident', compact('presidents'));
    }
    
    public function deletePresident($id)
    {
        $president = DB::table('presidents')->where('id', $id)->first();
    
        if ($president) {
            DB::table('presidents')->where('id', $id)->delete();
            return redirect()->route('viewPresident')->with('alert', 'Message deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Permission denied.');
        }
    }
    
}
