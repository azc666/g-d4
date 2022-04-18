<div>
    <div class="form-group ml-6">
        <div class="btn-group" role="group">
            <input wire:model="platform" type="radio" class="btn-check btn-outline-secondary rounded m-2 p-1"
                name="payment_platform" id="btnradio1" autocomplete="off" value="PayPal">
            <label class="btn btn-outline-primary" for="btnradio1">
                <img class="mt-2 w-full" src="{{ asset('/img/payment-platforms/paypal.png') }}">
            </label>

            <input wire:model="platform" type="radio" class="btn-check btn-outline-secondary rounded m-2 p-1"
                name="payment_platform" id="btnradio2" autocomplete="off" value="Stripe">
            <label class="w-3/4 btn btn-outline-primary" for="btnradio2">
                <img src="{{ asset('/img/payment-platforms/credit-cards2.png') }}">
            </label>

        </div>
        @error('payment_platform')
        <div class="block w-full text-red-500 text-base">
            {{ $message }}
        </div>
        @enderror


        <div class="mt-3">
            @if ($platform === null)
            @else
            @include('components.' . strtolower($platform) . '-collapse')
            @endif
        </div>


    </div>
</div>
