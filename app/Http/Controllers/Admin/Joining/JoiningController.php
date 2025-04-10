<?php

namespace App\Http\Controllers\Admin\Joining;

use App\Http\Controllers\Controller;
use App\Models\Web\Pages\JoinUs;
use App\Models\PromoCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class JoiningController extends Controller
{
    // Display all applications
    public function viewJoinApplication()
    {
        $joinApp = JoinUs::where('status', 1)->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.pages.joinus.joiningApplication', compact('joinApp'))->with('no', 1);
    }

    // Display only approved applications
    public function Application()
    {
        $joinApp = JoinUs::where('status', 2)
            ->where('payment', 'success')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('admin.pages.joinus.Application', compact('joinApp'));
    }

    // Change application status
    public function ChangeStatusApplication(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:join_us_form,id',
            'status' => 'required|integer|min:1|max:3',
        ]);

        $joinApp = JoinUs::find($request->id);

        if (!$joinApp) {
            return redirect()->route('viewJoinApplication')->with('error', 'Application not found!');
        }

        $prefixes = [
            'NATIONAL TEAM' => 'NHRCCB/NT/',
            'STATE TEAM' => 'NHRCCB/ST/',
            'DISTRICT TEAM' => 'NHRCCB/DT/',
            'DIVISION TEAM' => 'NHRCCB/VT/',
            'BLOCK TEAM' => 'NHRCCB/BT/',
            'ACTIVE MEMBER' => 'NHRCCB/AM/',
            'VOLUNTEER' => 'NHRCCB/VL/',
            'DEFAULT' => 'NHRCCB/OT/',
        ];
        $prefix = $prefixes[$joinApp->level] ?? $prefixes['DEFAULT'];

        // Last generated reg_no fetch karega
        $lastRegNo = JoinUs::where('reg_no', 'LIKE', "$prefix%")
            ->orderBy('id', 'desc')
            ->value('reg_no');

        if ($lastRegNo) {
            // Reg_no se last numeric part nikalne ka logic
            preg_match('/(\d+)$/', $lastRegNo, $matches);
            $lastNumber = isset($matches[1]) ? (int) $matches[1] : 0;
            $newNumber = $lastNumber + 1;
        } else {
            // Default start numbers
            $start_numbers = [
                'ACTIVE MEMBER' => 6000,
                'VOLUNTEER' => 15000,
            ];
            $default_start = 5200;
            $newNumber = $start_numbers[$joinApp->level] ?? $default_start;
        }

        $reg_no = $prefix . $newNumber;

        $joinApp->reg_no = $reg_no;
        $joinApp->status = $request->status;
        $joinApp->updated_at = now();

        $joinApp->save();

        Mail::send([], [], function ($message) use ($joinApp, $reg_no) {
            $message->to($joinApp->email)
                ->subject('Welcome to the NHRCCB Teams')

                ->html('<p>Dear ' . $joinApp->name . ',</p><p> Your Registration No is : ' . $reg_no . ' </p><p>Designation as a ' . $joinApp->designation . ' </p><p> Attached is Welcome to the NHRCCB Teams.</p><p>Best regards,<br>Your Organization</p>');
        });

        return redirect()->back()->with('alert', 'Application status updated successfully!');
    }



    // Delete an application
    public function deleteJoinApplication($id)
    {
        $joinApp = JoinUs::find($id);
        if ($joinApp) {
            $imageFields = [
                'passport_image',
                'adhar_front_img',
                'adhar_back_img',
                'pan_card_img',
                'other_doc_img'
            ];
            foreach ($imageFields as $field) {
                $imagePath = $joinApp->$field;
                if (!empty($imagePath) && File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }
            $joinApp->delete();
            return redirect()->route('viewJoinApplication')->with('alert', 'Application deleted successfully!');
        }
        return redirect()->back()->with('error', 'Application not found!');
    }



    public function viewPromocode(Request $request)
    {
        $promoCodes = PromoCode::orderByDesc('created_at')->get();
        return view('admin.pages.joinus.promocode', compact('promoCodes'));;
    }

    public function addPromocode(Request $request)
    {
        $request->validate([
            'code' => 'required|string|unique:promo_codes,code',
            'type' => 'required|in:flat,percent',
            'discount' => 'required|numeric|min:0.01',
            'expires_at' => 'nullable|date',
        ]);

        PromoCode::create([
            'code' => strtoupper($request->code),
            'type' => $request->type,
            'discount' => $request->discount,
            'expires_at' => $request->expires_at,
            'is_active' => '1',
        ]);

        return redirect()->back()->with('alert', 'Promo code created successfully.');
    }

    public function destroy($id)
    {
        $promo = PromoCode::findOrFail($id);
        $promo->delete();

        return redirect()->back()->with('alert', 'Promo code deleted successfully.');
    }
}
