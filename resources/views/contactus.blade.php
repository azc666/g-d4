<x-home-layout>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <x-slot name="title">G+D Contact Us</x-slot>

  <div class="-mb-20 sm:mb-8 pb-16 mt-2 sm:mt-10 mx-8 sm:mx-20 bg-gray-100 bg-opacity-60 background-trans rounded-lg shadow-lg">

      <div class="flex md:pl-6 pt-12 pr-0">

        <div class="h-1/4">
          <img class="w-0 sm:w-full" src="/assets/posters/services.jpg" alt="">
        </div>

        <div class="-mb-20">

          <h1 class="-mt-6 text-4xl lg:text-5xl text-gray-800 text-center font-chicle">
            Need to Contact Us?
          </h1>
          <h3 class="text-2xl md:text-3xl lg:text-4xl text-gray-800 text-center leading-tight font-chicle">
            Call, email, send us a message,
            <span class="lg:hidden"><br></span>
            <a href="#map" class="border-b-2 border-teal-600 hover:text-gray-600">or just stop on
              by</a>&nbsp;&#128522;<br>
          </h3>

          <div class="mt-4 sm:mb-8 text-center">

            <span class="text-xl sm:text-3xl font-bold sm:-ml-8 ">Graphics + Design</span>

            <p class="xxs:-mb-4 md:text-xl lg:text-xl text-center font-bold">
              <span class="sm:-ml-8 tracking-tighter">1111</span> W. Cass Street
              <br>
              <span class="sm:-ml-8">Tampa, FL 33606</span>
            </p>
            <div class="mt-4 font-semibold">

              <div class="inline-flex space-x-6 text-xl">
                <span class="lg:visible self-center">
                  <a href="tel:8132549444" class="hover:text-gray-600">813-254-9444</a>
                </span>

                <span class="lg:visible self-center">
                  {{-- <img class="lg:self-center" src="assets/icons/at2.png" alt="" /> --}}
                  <a href="mailto:output@g-d.com" class="hover:text-gray-600">output@g-d.com</a>
                </span>
              </div>
            </div>
          </div>

            <div class="p-8 -mt-16 sm:-mt-24">

                <livewire:contact-form />

            </div>
          </div>
        </div>

        <div id="map" class="h-96 mt-32 sm:mt-20 ml-8 mr-8 mb-18 pb-8 flex">
          <iframe class="rounded-lg shadow-2xl flex-1 -mt-6" frameborder="0" style="zoom:4"
            src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJwfFnBuFVaBQR0FFyUS7-9fY&key={{ env('GOOGLE_MAPS_KEY') }}"
            allowfullscreen></iframe>
        </div>

</x-home-layout>
<x-footer />
