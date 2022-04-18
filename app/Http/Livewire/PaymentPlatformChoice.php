<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Currency;
use Illuminate\Http\Request;
use App\Models\PaymentPlatform;
use Illuminate\Support\Facades\Session;

class PaymentPlatformChoice extends Component
{
    public $paymentPlatform;
    public $paymentMethod;
    public $paymentPlatformId;
    public $platform;

    public function mount(Request $request)
    {
        $paymentPlatform = PaymentPlatform::all();
    }



    public function render()
    {
        return view('livewire.payment-platform-choice');
    }
}