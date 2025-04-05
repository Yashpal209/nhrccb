<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Web\Pages\JoinUs;
use Illuminate\Support\Facades\DB;

class PayuController extends Controller
{
    public function payUMoneyView(Request $request)
    {
        $txnid = $request->txnid;

        $joinUsData = JoinUs::where('txnid', $txnid)->first();

        if (!$joinUsData) {
            return redirect()->route('JoinUs')->with('error', 'Invalid transaction ID.');
        }

        $MERCHANT_KEY = env('PAYU_MERCHANT_KEY');
        $SALT = env('PAYU_SALT');
        $PAYU_BASE_URL = "https://secure.payu.in";

        $successURL = route('payu.success');
        $failURL = route('payu.cancel');
        $designationAmounts = [
            // National
            'NATIONAL JOINT SECRETARY' => 51000,
            'NATIONAL LEGAL  ADVISOR' => 21000,
            'NATIONAL MEDIA OFFICER' => 21000,
            'NATIONAL PARTON' => 21000,
            'NATIONAL ADVISOR' => 21000,
            // State
            'STATE PRESIDENT' => 21000,
            'STATE VICE PRESIDENT' => 11000,
            'STATE GENERAL SECRETARY' => 11000,
            'STATE SECRETARY' => 8100,
            'STATE JOINT SECRETARY' => 8100,
            'STATE MEDIA OFFICER' => 5100,
            'STATE PARTON' => 5100,
            'STATE ADVISOR' => 5100,
            // District
            'DISTRICT PRESIDENT' => 7100,
            'DISTRICT VICE PRESIDENT' => 6100,
            'DISTRICT GENERAL SECRETARY' => 5100,
            'DISTRICT SECRETARY' => 4100,
            'DISTRICT JOINT SECRETARY' => 4100,
            'DISTRICT LEGAL  ADVISOR' => 4100,
            'DISTRICT MEDIA OFFICER' => 3100,
            'DISTRICT PARTON' => 3100,
            'DISTRICT ADVISOR' => 3100,
            // Block
            'BLOCK PRESIDENT' => 4100,
            'BLOCK VICE PRESIDENT' => 3100,
            'BLOCK GENERAL SECRETARY' => 3100,
            'BLOCK SECRETARY' => 3100,
            'BLOCK JOINT SECRETARY' => 3100,
            'BLOCK LEGAL  ADVISOR' => 2100,
            'BLOCK MEDIA OFFICER' => 2100,
            'BLOCK PARTON' => 2100,
            'BLOCK ADVISOR' => 2100,
            // Others
            'ACTIVE MEMBER' => 1100,
            'VOLUNTEER' => 500,
        ];

        // Get designation from session and convert to uppercase to match mapping
        $designation = strtoupper($joinUsData['designation'] ?? '');

        // Check if designation exists in the predefined list
        if (!array_key_exists($designation, $designationAmounts)) {
            return redirect()->route('JoinUs')->with('error', 'Invalid designation/ or the designation is not available for payment.');
        }

        // Get amount
        $amount = $designationAmounts[$designation];


        $posted = [
            'key' => $MERCHANT_KEY,
            'txnid' => $txnid,
            'amount' => $amount,
            'firstname' => $joinUsData->name,
            'email' => $joinUsData->email,
            'productinfo' => 'Join Us Membership',
            'surl' => $successURL,
            'furl' => $failURL,
        ];

        $hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
        $hash_string = '';
        foreach (explode('|', $hashSequence) as $var) {
            $hash_string .= isset($posted[$var]) ? $posted[$var] : '';
            $hash_string .= '|';
        }
        $hash_string .= $SALT;
        $hash = strtolower(hash('sha512', $hash_string));

        $action = $PAYU_BASE_URL . '/_payment';
        return view('payu', compact('action', 'hash', 'MERCHANT_KEY', 'txnid', 'successURL', 'failURL', 'posted'));
    }


    public function payUResponse(Request $request)
    {
        $txnId = $request->txnid;

        if (!$txnId) {
            return redirect()->route('JoinUs')->with('error', 'Missing transaction ID.');
        }

        if ($request->status === 'success') {
            $joinUser = JoinUs::where('txnid', $txnId)->first();

            // return $joinUser;
            if (!$joinUser) {
                return redirect()->route('JoinUs')->with('error', 'Form data not found.');
            }

            $joinUser->update([
                'payment' => 'success',
            ]);
            $joinUser->save();

            return redirect()->route('thankYou')->with('success', 'Your form has been submitted successfully.');
        }

        return redirect()->route('JoinUs')->with('error', 'Payment verification failed.');
    }


    // public function checkPayuPayment($txnid)
    // {
    //     $merchantKey = env('PAYU_MERCHANT_KEY');
    //     $salt = env('PAYU_SALT');
    //     $command = "verify_payment";
    //     $txnId = $txnid;
    //     $hashString = $merchantKey . "|" . $command . "|" . $txnId . "|" . $salt;
    //     $hash = hash('sha512', $hashString);
    //     $postData = [
    //         "key" => $merchantKey,
    //         "command" => $command,
    //         "var1" => $txnId,
    //         "hash" => $hash,
    //     ];
    //     $url = "https://info.payu.in/merchant/postservice.php?form=2";

    //     // cURL request
    //     $ch = curl_init($url);
    //     curl_setopt($ch, CURLOPT_POST, true);
    //     curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     $response = curl_exec($ch);
    //     curl_close($ch);
    //     $response = json_decode($response);
    //     return $response;
    // }

    public function payUCancel(Request $request)
    {
        $txnid = $request->txnid;

        if ($txnid) {
            JoinUs::where('txnid', $txnid)->update(['payment' => 'failed']);
        }

        return redirect()->route('JoinUs')->with('error', 'Payment cancelled. Please try again.');
    }
}
