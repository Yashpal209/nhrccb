<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Web\Pages\JoinUs;

class PaymentController extends Controller
{
    public function paymentSuccess(Request $request)
{
    if ($request->status == 'success') {
        // Retrieve stored data
        $data = session('join_us_data');
        
        // Save Data in Database
        JoinUs::create($data);

        return redirect()->route('thankYou')->with('alert', 'Payment successful, form submitted.');
    }
    return redirect()->route('payment.failure');
}

public function paymentFailure()
{
    return redirect()->route('joinUs')->with('alert', 'Payment failed. Please try again.');
}

}
