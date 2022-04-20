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

    public function pay(Request $request, PaymentPlatform $paymentPlatform)
    {
        $payment_platforms = PaymentPlatform::all();

        $request->validate([
            'value' => ['required', 'numeric', 'min:5'],
            'currency' => ['required', 'exists:currencies,iso'],
            'payment_message' => 'required|min:5',
            'payment_platform' => ['required', 'exists:payment_platforms,name'],
        ]);

        $paymentPlatform = $this->paymentPlatformResolver->resolveService($request->payment_platform);

        session()->put('paymentPlatformId', $request->payment_platform);
// dd($paymentPlatform->handlePayment($request));
        return $paymentPlatform->handlePayment($request);
    }

    public function approval()
    {
        if (session()->has('paymentPlatformId')) {
            $paymentPlatform = $this->paymentPlatformResolver->resolveService(session()->get('paymentPlatformId'));

            return $paymentPlatform->handleApproval();
        }

        Session::put('approval', 'no_approval');

        return redirect()
            ->route('dashboard');
    }

    public function cancelled()
    {
        Session::put('cancelled', 'cancelled');

        return redirect()
            ->route('dashboard');
    }
}