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
// dd($payment_platforms[1]->id);
        $request->validate([
            'value' => ['required', 'numeric', 'min:5'],
            'currency' => ['required', 'exists:currencies,iso'],
            'payment_message' => 'required|min:5',
            'payment_platform' => ['required', 'exists:payment_platforms,name'],
        ]);

        $paymentPlatform = resolve(PayPalService::class);

        // $paymentPlatform = $this->paymentPlatformResolver->resolveService($request->payment_platform);

        // session()->put('paymentPlatformId', $request->payment_platform);
        return $paymentPlatform->handlePayment($request);
    }

    public function approval()
    {
        $paymentPlatform = resolve(PayPalService::class);

        return $paymentPlatform->handleApproval();
//         if (session()->has('paymentPlatformId')) {
//             $paymentPlatform = $this->paymentPlatformResolver
//                 ->resolveService(session()->get('paymentPlatformId'));

// // dd(session('paymentPlatformId'));
//                 return $paymentPlatform->handleApproval();
//         }

//         return redirect()
//             ->route('dashboard')
//             ->withErrors('We cannot retrieve your payment platform. Try again, please.');
    }

    public function cancelled()
    {
        return redirect()
            ->route('dashboard')
            ->withErrors('You cancelled the payment.');
    }
}