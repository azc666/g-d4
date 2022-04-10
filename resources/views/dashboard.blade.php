<x-bapp-layout>
	<x-slot name="header">
		<div class="flex">
			<div>
				<img src="assets/g-d_logo.gif" alt="" class="ml-2 mt-1 h-12">
			</div>
			<div class="ml-4 mt-4 font-semibold text-2xl text-gray-800 leading-tight">
				{{ __('Payment Processing') }}
			</div>
		</div>
	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

				{{--
				<x-jet-welcome /> --}}

				<div class="py-4">
					<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
						<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
							<div>
								<form action="{{ route('pay') }}" method="POST" name="paymentForm" id="paymentForm" class="container px-5 py-8 mx-auto">
									<div class="flex flex-col text-center w-full mb-4">
										<h1 class="sm:text-3xl text-2xl font-medium title-font  text-gray-900">Make a Payment</h1>
									</div>
									@csrf
									<div class="lg:w-1/2 md:w-2/3 mx-auto">
										<div class="flex flex-wrap -m-2">

											{{-- <div class="p-2 w-1/2"> --}}
												<div class="relative p-2 w-1/2">
													<label for="value" class="leading-7 text-sm text-gray-600">Amount to Pay
													</label>
													<input type="number" min="5" step="0.01"
														class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
														name="value" value="{{ mt_rand(500, 100000) / 100 }}">

													@error('value')
													<div class="block w-full text-red-600">
														{{ $message }}
													</div>
													@enderror
												</div>
												{{--
											</div> --}}

											<div class="relative p-2 w-1/2">
												<label for="currency" class="leading-7 text-sm text-gray-600">Currency</label>
												<select wire:model="currency" name="currency" id="currency"
													class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
													{{-- <option value="">Select Currency</option> --}}
													@foreach ($currencies as $currency)
													<option value="{{ $currency->iso }}">{{ strtoupper($currency->iso) }}</option>
													@endforeach
												</select>
												@error('currency')
												<div class="block w-full text-red-600">
													{{ $message }}
												</div>
												@enderror
											</div>

											<div class="p-2  w-full">
												<div class="relative">
													<label for="payment_message" class="leading-7 text-sm text-gray-600">Details of your payment
														(i.e. Invoice numbers, special instructions, etc.)</label>
													<textarea wire:model="payment_message" type="text" name="payment_message"
														class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-24 text-base outline-none text-gray-700 py-1 px-3 resize-none transition-colors duration-200 ease-in-out">{{ old('payment_message') }}</textarea>
													@error('payment_message')
													<div class="block w-full text-red-600">
														{{ $message }}
													</div>
													@enderror
												</div>
											</div>
											{{-- @livewire('input-fields', ['currencies'=>"$currencies"]) --}}

											<div class="p-2 w-full mt-2 text-center text-xl font-semibold">
												<label class=" text-gray-600 pb-2">Select your Payment Platform
												</label>
											</div>

										</div>
									</div>
							</div>


</x-bapp-layout>
<x-footer />
