<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;
use App\Models\PaymentPlatform;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    // protected $rules = [
    //     'value' => ['required', 'numeric', 'min:5'],
    //     'currency' => ['required', 'exists:currencies,iso'],
    //     'payment_message' => ['required', 'min:5'],
    //     'payment_platform' => ['required'],
    // ];

    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }

    public function index(Request $request, Currency $currencies, PaymentPlatform $paymentPlatform)
    {
        $currencies = Currency::all();
        $currencies = Currency::orderBy('updated_at', 'ASC')->get();

        $paymentPlatform = PaymentPlatform::all();
        $value = $request->input('value');
// dd($paymentPlatforms);
        return view('dashboard', compact('request', 'currencies', 'paymentPlatform', 'value'));
    }
}