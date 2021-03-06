<nav x-data="{ open: false }" class="bg-teal-300 border-b-2 border-red-100">
	<!-- Primary Navigation Menu -->
	<div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
		<div class="flex justify-between h-16">
			<div class="flex">
				<!-- Logo -->
				<div class="shrink-0 flex items-center">
					<a href="{{ route('home') }}">
						<x-jet-application-mark class="block h-9 w-auto" />
					</a>
				</div>

				<!-- Navigation Links -->
				<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
					<x-jet-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
						{{ __('Home') }}
					</x-jet-nav-link>
				</div>
				<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
					<x-jet-nav-link href="{{ route('aboutus') }}" :active="request()->routeIs('aboutus')">
						{{ __('About Us') }}
					</x-jet-nav-link>
				</div>
				<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
					<x-jet-nav-link href="{{ route('testimonials') }}" :active="request()->routeIs('testimonials')">
						{{ __('Testimonials') }}
					</x-jet-nav-link>
				</div>
				<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
					<x-jet-nav-link href="{{ route('services') }}" :active="request()->routeIs('services')">
						{{ __('Services') }}
					</x-jet-nav-link>
				</div>
				<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
					<x-jet-nav-link href="{{ route('sendfiles') }}" :active="request()->routeIs('sendfiles')">
						{{ __('Send Files') }}
					</x-jet-nav-link>
				</div>
				<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
					<x-jet-nav-link href="{{ route('contactus') }}" :active="request()->routeIs('contactus')">
						{{ __('Contact Us') }}
					</x-jet-nav-link>
				</div>
				{{-- <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
					<x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
						{{ __('Dashboard') }}
					</x-jet-nav-link>
				</div> --}}
			</div>


			<!-- Hamburger -->
			<div class="-mr-2 flex items-center sm:hidden">
				<span class="font-myriad font-bold text-xl mr-28 xs:mr-36">Graphics + Design</span>
				<button @click="open = ! open"
					class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
					<svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
						<path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round"
							stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
						<path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
							stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
					</svg>
				</button>
			</div>
		</div>
	</div>
	<!-- Responsive Navigation Menu -->
	<div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
		<div class="pt-1 pb-1 -space-y-1">
			<x-jet-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
				{{ __('Home') }}
				</x-jet-nav-link>
		</div>
		<div class="pt-1 pb-1 -space-y-1">
			<x-jet-responsive-nav-link href="{{ route('aboutus') }}" :active="request()->routeIs('aboutus')">
				{{ __('About Us') }}
				</x-jet-nav-link>
		</div>
		<div class="pt-1 pb-1 -space-y-1">
			<x-jet-responsive-nav-link href="{{ route('testimonials') }}" :active="request()->routeIs('testimonials')">
				{{ __('Testimonials') }}
				</x-jet-nav-link>
		</div>
		<div class="pt-1 pb-1 -space-y-1">
			<x-jet-responsive-nav-link href="{{ route('services') }}" :active="request()->routeIs('services')">
				{{ __('Services') }}
				</x-jet-nav-link>
		</div>
		<div class="pt-1 pb-1 -space-y-1">
			<x-jet-responsive-nav-link href="{{ route('sendfiles') }}" :active="request()->routeIs('sendfiles')">
				{{ __('Send Files') }}
				</x-jet-nav-link>
		</div>
		<div class="pt-1 pb-1 -space-y-1">
			<x-jet-responsive-nav-link href="{{ route('contactus') }}" :active="request()->routeIs('contactus')">
				{{ __('Contact Us') }}
				</x-jet-nav-link>
		</div>
		{{-- <div class="pt-1 pb-1 -space-y-1">
			<x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
				{{ __('Dashboard') }}
			</x-jet-responsive-nav-link>
		</div> --}}
	</div>

</nav>
