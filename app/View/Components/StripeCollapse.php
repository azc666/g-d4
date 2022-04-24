<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\PaymentPlatform;
use App\Resolvers\paymentPlatformResolver;

class StripeCollapse extends Component
{
    public $paymentPlatform;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->paymentPlatform = PaymentPlatform::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.stripe-collapse', 'paymentPlatform');
    }
}