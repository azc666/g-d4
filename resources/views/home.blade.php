<x-home-layout>
  {{-- <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot> --}}

  <x-slot name="title">G+D Home</x-slot>

  <div class="py-8">
    {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> --}}
        <div class="">
          {{-- The Home Page --}}
          <h1 class="-mt-4 leading-none text-4xl sm:text-6xl text-center font-myriad font-extrabold tracking-tight">
            Graphics + Design
          </h1>
          <h3 class="mt-0 text-2xl sm:text-3xl text-center font-myriad italic">Imaging at the Speed of Business</h3>
        </div>
        <div class="pb-2 flex">
          <div class="mx-auto sm:w-3/4 p-2 mt-5 sm:mt-8 bg-gray-50 bg-opacity-50 border rounded-lg shadow-2xl">
            {{-- <a target="_blank" href="{{ asset('assets/HolidaySchedule2021_22.png') }}"> --}}
              <img class="w-auto mx-auto object-cover rounded" src="/assets/GDBuilding2.png" alt="G+D Home Office">
              {{-- </a> --}}
            <div class="flex justify-between">
              <div class="block pt-2 pl-6 mb-0 text-sm sm:text-base text-gray-800 font-bold">Hours: M-F &nbsp; 9am-5pm</div>
              {{-- <div class="block pt-2 pr-2 mb-0 text-sm sm:text-base text-gray-800 font-bold">Hours: M-F 9:30am -
                5pm <span class="text-red-500 font-bold"> - Office Closed for Thanksgiving 11/25-11/26</span></div> --}}
              <div class="pt-2 pr-6 mb-0 text-right text-sm sm:text-base text-gray-800 font-bold">The Home Office -
                Tampa, FL</div>
            </div>

          </div>
        </div>
        {{--
      </div> --}}
      {{--
    </div> --}}
  </div>

  <div class="-mt-8 mb-6 pb-0 sm:pb-0 mx-auto flex flex-wrap">

    <div class="flex-1 zoom">
      <a href="/aboutus" class=" block hover:bg-transparent">
        <div class="w-48 p-2 mt-3 sm:mt-8 mx-auto bg-gray-50 bg-opacity-50 rounded-lg shadow-2xl">
          <div class="font-chicle text-4xl text-center">
            About Us
          </div>
          <img class="h-auto w-full object-fill" src="/assets/posters/homeimg.jpg" alt="">
        </div>
      </a>
    </div>

    <div class="flex-1 zoom">
      <a href="/services" class=" block hover:bg-transparent">
        <div class="w-48 p-2 mt-3 sm:mt-8 mx-auto bg-gray-50 bg-opacity-50 rounded-lg shadow-2xl">
          <div class="font-chicle text-4xl text-center">
            Services
          </div>
          <img class="h-auto w-full object-cover" src="/assets/posters/services.jpg" alt="">
        </div>
      </a>
    </div>

    <div class="flex-1 zoom">
      <a href="/sendfiles" class="hover:bg-transparent">
        <div class="w-48 p-2 mt-3 sm:mt-8 mx-auto bg-gray-50 bg-opacity-50 border rounded-lg shadow-2xl">
          <div class="font-chicle text-4xl text-center">
            Send Files
          </div>
          <img class="h-auto w-full object-cover" src="/assets/posters/sendfiles.jpg" alt="">
        </div>
      </a>
    </div>

    <div class="flex-1 zoom">
      <a href="/contactus" class="hover:bg-transparent">
        <div class="w-48 p-2 mt-3 sm:mt-8 mx-auto bg-gray-50 bg-opacity-50 border rounded-lg shadow-2xl">
          <div class="font-chicle text-4xl text-center">
            Contact Us
          </div>
          <img class="h-auto w-full object-cover" src="/assets/posters/contactus.jpg" alt="">
        </div>
      </a>
    </div>

  </div>

  <x-footer />
</x-home-layout>
