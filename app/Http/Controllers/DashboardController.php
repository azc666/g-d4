<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;
use App\Models\PaymentPlatform;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index(Request $request, Currency $currencies, PaymentPlatform $paymentPlatform)
    {
        $currencies = Currency::all();
        $currencies = Currency::orderBy('iso', 'DESC')->get();

        $paymentPlatform = PaymentPlatform::all();
        $value = $request->input('value');

        return view('dashboard', compact('request', 'currencies', 'paymentPlatform', 'value'));
    }
}