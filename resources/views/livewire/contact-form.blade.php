<div class="py-16">
	<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
		<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
			<div class="relative bg-white">
				<div class="absolute inset-0">
					<div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50"></div>
				</div>
				<div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-5">
					<div class="bg-gray-50 py-16 px-4 sm:px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12 -mb-20">

						<div class="max-w-lg mx-auto -mt-16 -pb-20">

							<h2 class="text-2xl font-extrabold tracking-tight text-gray-700 sm:text-3xl">
								Get in touch
							</h2>
							<p class="mt-3 text-lg leading-6 text-gray-500">
								Have a question about our products or services? Need an estimate, or a call back?
								<br><br>
								You may contact support by sending a message using this form. We will get back to you
								ASAP. For more
								urgent requests, you can contact support by phone, fax, or email.
								<br><br>
								The phone field is optional. All other fields are required to submit the message.
							</p>
							<dl class="mt-8 text-base text-gray-500">

								<div class="mt-6">
									<dt class="sr-only">Phone number</dt>
									<dd class="flex">
										<!-- Heroicon name: outline/phone -->
										<svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
											viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
										</svg>
										<span class="ml-3">
											813.254.9444
										</span>
									</dd>
								</div>

								<div class="md:mt-6">
									<dt class="sr-only">Fax number</dt>
									<dd class="flex">
										<!-- Heroicon name: outline/fax -->
										<svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
											viewBox="0 0 24 24" stroke="currentColor">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
										</svg>
										<span class="ml-3">
											813.254.9445
										</span>
									</dd>
								</div>

								<div class="md:mt-6">
									<dt class="sr-only">Email</dt>
									<dd class="flex">
										<!-- Heroicon name: outline/mail -->
										<svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
											viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
												d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
										</svg>
										<span class="ml-3 mb-8">
											<a href="mailto:support@g-d.com">support@g-d.com</a>
										</span>
									</dd>
								</div>
							</dl>
						</div>
					</div>

					<div class="bg-teal-300 opacity-80 py-16 px-4 sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">

						<div class="max-w-lg mx-auto lg:max-w-none">

							<form wire:submit.prevent="submitForm" method="POST" class="grid grid-cols-1 gap-y-6">
								@csrf

								@if (session()->has('message') && session('valid') === 'valid')
								<div
									class="block w-full p-4 rounded-lg bg-green-300 border-2 border-green-800 text-green-900 text-base font-medium">
									<div class="flex justify-between">
										<div class="flex-shrink-0 pr-4">
											<!-- Heroicon name: solid/check-circle -->
											<svg class="h-5 w-5 text-green-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
												fill="currentColor" aria-hidden="true">
												<path fill-rule="evenodd"
													d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
													clip-rule="evenodd" />
											</svg>
										</div>

										<div>
											{{ session('message') }}
										</div>

										<div class="ml-auto pl-3">
											<div class="-mx-1.5 -my-1.5">
												<button type="button" onclick="window.location.href='/';"
													class="inline-flex rounded-md p-1.5 text-green-700 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-green-50 focus:ring-green-600">
													<span class="sr-only">Dismiss</span>
													<!-- Heroicon name: solid/x -->
													<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
														fill="currentColor" aria-hidden="true">
														<path fill-rule="evenodd"
															d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
															clip-rule="evenodd" />
													</svg>
												</button>
											</div>
										</div>
									</div>
								</div>

								@elseif (session()->has('message') && session('valid') !== 'valid')
								<div
									class="block w-full p-4 rounded-lg bg-red-300 border-2 border-red-800 text-red-800 text-base font-medium">
									<div class="flex justify-between">
										<div class="flex-shrink-0 pr-4">
											<!-- Heroicon name: solid/check-circle -->
											<svg class="h-5 w-5 text-red-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
												fill="currentColor" aria-hidden="true">
												<path fill-rule="evenodd"
													d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
													clip-rule="evenodd" />
											</svg>
										</div>

										<div>
											{{ session('message') }}
										</div>

										<div class="ml-auto pl-3">
											<div class="-mx-1.5 -my-1.5">
												<button type="button" onclick="window.location.href='/';"
													class="inline-flex rounded-md p-1.5 text-red-700 hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-red-50 focus:ring-red-600">
													<span class="sr-only">Dismiss</span>
													<!-- Heroicon name: solid/x -->
													<svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
														fill="currentColor" aria-hidden="true">
														<path fill-rule="evenodd"
															d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
															clip-rule="evenodd" />
													</svg>
												</button>
											</div>
										</div>
									</div>
								</div>
								@endif

								<div>
									<label for="name" class="sr-only">Full name</label>
									<input wire:model="name" type="text" name="name" id="name"
										class="block w-full shadow-lg py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md {{ $errors->has('name') ? "
										border-2 border-red-500 bg-red-100" : '' }}" autocomplete="name" placeholder="Full name"
										value="{{ old('name') }}">
									@error('name')
									<div class="text-red-500 text-sm">{{ $message }}</div>
									@enderror
								</div>
								<div>
									<label for="email" class="sr-only">Email</label>
									<input wire:model="email" id="email" name="email" type="text"
										class="block w-full shadow-lg py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md {{ $errors->has('email') ? "
										border-2 border-red-500 bg-red-100" : '' }}" autocomplete="email"
										placeholder="Email (all addresses are verified)" value="{{ old('email') }}">
									<x-honey />
									<x-honey-recaptcha />
									@error('email')
									<div class="text-red-500 text-sm">{{ $message }}</div>
									@enderror
								</div>
								<div>
									<label for="phone" class="sr-only">Phone</label>
									<input wire:model="phone" type="text" name="phone" id="phone" autocomplete="tel"
										class="block w-full shadow-lg py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md {{ $errors->has('phone') ? "
										border-2 border-red-500 bg-red-100" : '' }}" placeholder="Phone" value="{{ old('phone') }}">
									@error('phone')
									<div class="text-red-500 text-sm">{{ $message }}</div>
									@enderror
								</div>
								<div class="mb-8">
									<label for="message" class="sr-only">Message</label>
									<textarea wire:model="message" id="message" name="message" rows="4"
										class="block w-full shadow-lg py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md {{ $errors->has('message') ? "
										border-2 border-red-500 bg-red-100" : '' }}" placeholder="Message">{{ old('message') }}</textarea>
									@error('message')
									<div class="text-red-500 text-sm">{{ $message }}</div>
									@enderror
								</div>

								<button type="submit"
									class="inline-flex justify-center items-center py-6 px-6 border border-transparent shadow-sm text-base uppercase font-bold tracking-wider rounded-lg text-indigo-50 bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 disabled:opacity-50">
									<svg wire:loading wire:target="submitForm" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
										xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
										<circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
										<path class="opacity-75" fill="currentColor"
											d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
										</path>
									</svg>
									<span>Submit</span>
								</button>
						</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
