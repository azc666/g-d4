<?php

namespace App\Resolvers;

use App\Models\PaymentPlatform;

class paymentPlatformResolver
{
  protected $paymentPlatforms;

  public function __construct()
  {
    $this->paymentPlatforms = PaymentPlatform::all();
  }

  public function resolveService($paymentPlatformId)
  {
// dd($this->paymentPlatforms->firstWhere('name', $paymentPlatformId)->name);
if ($paymentPlatformId === '1') {
  $name = strtolower('PayPal');
}

    if ($paymentPlatformId === '2') {
      $name = strtolower('Stripe');
    }
// dd($paymentPlatformId);
// $name = strtolower($this->paymentPlatforms->firstWhere('id', $paymentPlatformId)->name);

    $service = config("services.{$name}.class");

    if ($service) {

      return resolve($service);
    }

    throw new \Exception('The selected platform is not in the configuration');
  }

}