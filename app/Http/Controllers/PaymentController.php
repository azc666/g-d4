<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentPlatform;
use App\Services\PayPalService;
use Illuminate\Support\Facades\Session;
use App\Resolvers\PaymentPlatformResolver;


class PaymentController extends Controller
{
    protected $paymentPlatformResolver;

    public function __construct(PaymentPlatformResolver $paymentPlatformResolver)
    {
        // $this->middleware('auth');

        $this->paymentPlatformResolver = $paymentPlatformResolver;
    }

    public function pay(Request $request)
    {
        // $request->request->add(['payment_platform' => session('payment_platform')]);
        // Session::put('', 'payment_platform');
// dd($request);
        $rules = [
            'value' => ['required', 'numeric', 'min:5'],
            'currency' => ['required', 'exists:currencies,iso'],
            'payment_message' => 'required|min:5',
            'payment_platform' => ['required', 'exists:payment_platforms,id'],
        ];

        // dd($request->all());

        $request->validate($rules);
// dd($request);
        // $paymentPlatform = resolve(PayPalService::class);
        $paymentPlatform = $this->paymentPlatformResolver->resolveService($request->payment_platform);

        session()->put('paymentPlatformId', $request->payment_platform);
// dd(session('paymentPlatformId'));
        return $paymentPlatform->handlePayment($request);
    }

    public function approval()
    {
        if (session()->has('paymentPlatformId')) {
            $paymentPlatform = $this->paymentPlatformResolver
                ->resolveService(session()->get('paymentPlatformId'));

// dd(session('paymentPlatformId'));
                return $paymentPlatform->handleApproval();
        }

        return redirect()
            ->route('dashboard')
            ->withErrors('We cannot retrieve your payment platform. Try again, please.');
    }

    public function cancelled()
    {
        return redirect()
            ->route('dashboard')
            ->withErrors('You cancelled the payment.');
    }
}