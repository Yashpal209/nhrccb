<?php

namespace App\Http\Controllers\Web\Pages;

use App\Http\Controllers\Controller;
use App\Models\Admin\Administration\NationalExecutive;
use App\Models\Admin\Administration\NationalPatron;
use App\Models\Admin\Administration\OfficeStaff;
use App\Models\Admin\Notification\LatestUpdate;
use App\Models\Admin\Notification;
use App\Models\Admin\Notification\WhatsNew;
use Illuminate\Support\Facades\DB;
use App\Models\Web\Pages\JoinUs;
use App\Models\Admin\OurAwardee;
use App\Models\Admin\publication;
use App\Models\District;
use App\Models\Division;
use App\Models\State;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function who_we_are()
    {
        return view('web.pages.about_us.who-we-are');
    }
    public function what_we_do()
    {
        return view('web.pages.about_us.what-we-do');
    }
    public function how_we_works()
    {
        return view('web.pages.about_us.how_we_works');
    }
    public function rules_regulations()
    {
        return view('web.pages.about_us.rules_regulations');
    }
    public function govt_recognition()
    {
        return view('web.pages.about_us.govt_recognition');
    }
    public function collaboration()
    {
        return view('web.pages.about_us.collaboration');
    }
    public function whos_who()
    {
        return view('web.pages.about_us.whos_who');
    }
    public function functions()
    {
        return view('web.pages.about_us.functions');
    }


    public function official_notification()
    {
        $notifications = Notification::orderBy('date', 'desc')->paginate(15);
        return view('web.pages.about_us.official_notification', compact('notifications'));
    }


    public function upcomingEvent()
    {
        return view('web.pages.home.upcomingEvent');
    }

    public function latestUpdate()
    {
        $latestUpdates = LatestUpdate::orderBy('date', 'desc')->paginate(10);
        return view('web.pages.home.latestUpdate', compact('latestUpdates'));
    }

    public function whatsNew()
    {
        $whatsNew = whatsNew::orderBy('date', 'desc')->get();
        // dd($whatsNew);
        $data = compact('whatsNew');
        return view('web.pages.home.whatsNew')->with($data);
    }
    public function funding()
    {
        return view('web.pages.about_us.funding');
    }
    public function trainingResearch()
    {
        return view('web.pages.training-research');
    }
    public function verification()
    {
        return view('web.pages.verification');
    }
    public function verify(Request $request)
    {
        // return $request;
        $request->validate([
            'identifier' => 'required',
            'level' => 'required',
        ]);

        $identifier = $request->input('identifier');
        $level = $request->input('level');
        $user = JoinUs::where(function ($query) use ($identifier) {
            $query->where('reg_no', $identifier)
                ->orWhere('mobile', $identifier);
        })
            ->where('level', $level)
            ->first();

        // return $user;
        if ($user) {
            return back()->with('success', 'User found')->with('user', $user);
        } else {
            return back()->with('error', 'User not found');
        }
    }
    public function verifymember(Request $request)
    {
        $request->validate([
            'identifier' => 'required',
            'level' => 'required',
        ]);

        $identifier = $request->input('identifier');
        $level = $request->input('level');
        // return $level;
        $userQuery = JoinUs::where(function ($query) use ($identifier) {
            $query->where('reg_no', $identifier)
                ->orWhere('mobile', $identifier);
        });

        // TEAM-type level logic
        if (Str::endsWith($level, 'TEAM')) {
            $userQuery->where('level', 'LIKE', '%TEAM');
        } else {
            return back()->with('error', 'This Member not found');
        }

        // Fetch user
        $user = $userQuery->first();

        if ($user) {
            return back()->with('success', 'User found')->with('user', $user);
        } else {
            return back()->with('error', 'This Member not found');
        }
    }


    public function publication()
    {
        $publications = Publication::orderBy('publication_date', 'desc')->get();
        return view('web.pages.about_us.publication', compact('publications'));
    }


    // about us 


    public function PresidentProfile()
    {
        $President = DB::table('presidents')
            ->where('type', 'profile')
            ->orderBy('created_at', 'asc')
            ->get();

        $title = "Profile";
        return view('web.pages.administration.PresidentMessage', compact('President', 'title'));
    }

    public function PresidentMessage()
    {
        $President = DB::table('presidents')
            ->where('type', 'message')
            ->orderBy('created_at', 'asc')
            ->get();

        $title = "Message";
        return view('web.pages.administration.PresidentMessage', compact('President', 'title'));
    }

    public function NationalPatronAdvisor()
    {
        $nationalpatrons = NationalPatron::where('type', 'National Patron')->orderby('created_at', 'asc')->get();
        $nationaladvisor = NationalPatron::where('type', 'National Legal Advisor')->orderby('created_at', 'asc')->get();
        $data = compact('nationalpatrons', 'nationaladvisor');
        return view('web.pages.administration.NationalPatron')->with($data);
    }
    public function NationalExecutive()
    {
        $nationalexecutive = NationalExecutive::orderby('order_no', 'asc')->get();
        $data = compact('nationalexecutive');
        // return $nationalexecutive;
        return view('web.pages.administration.NationalExecutive')->with($data);
    }
    public function StatePresident()
    {
        $statepresident =  DB::table('state_president')->orderby('order_no', 'asc')->get();
        $data = compact('statepresident');
        return view('web.pages.administration.StatePresident')->with($data);
    }


    public function Officials()
    {
        $officestaff = OfficeStaff::orderby('order_no', 'asc')->get();
        $data = compact('officestaff');
        return view('web.pages.administration.OfficeStaff')->with($data);
    }

    public function OurAwardee()
    {
        $viewAwardee = OurAwardee::OrderBy('created_at', 'desc')->get();
        $data = compact('viewAwardee');
        return view('web.pages.ourawardee.ourAwardee')->with($data)->with('no', '1');
    }


    public function ContactUs()
    {
        $statepresident =  DB::table('state_president')->OrderBy('order_no', 'desc')->get();
        $data = compact('statepresident');
        return view('web.pages.contactUs.contactUs')->with($data)->with('no', '1');
    }
    public function officeDirectory()
    {
        return view('web.pages.contactUs.directory');
    }
    public function HelpLine()
    {
        return view('web.pages.contactUs.helpline');
    }
    public function privacyPolicy()
    {
        return view('web.pages.contactUs.privacy');
    }
    public function term()
    {
        return view('web.pages.contactUs.term');
    }
    public function donation()
    {
        return view('web.pages.donation.donation');
    }

    public function stateData()
    {
        $states = State::all();
        return response()->json($states);
    }

    public function divisionData(Request $request)
    {
        $request->validate([
            'state' => 'required|string',
        ]);
        $divisions = Division::Where('state_name', $request->state)->get();
        return response()->json($divisions);
    }

    public function districtData(Request $request)
    {
        $request->validate([
            'division' => 'required|string',
        ]);
        $districts = District::Where('division_name', $request->division)->get();
        return response()->json($districts);
    }
}
