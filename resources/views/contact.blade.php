<x-layout>
  <!-- Container for demo purpose -->


  <!-- Section: Design Block -->
  <section class="mb-32 text-center text-gray-800">
    <!-- <style>
        .map-container {
          height: 700px;
          width: 500px;
          z-index: 0;

        } -->
    </style>
    <div class="px-6 py-12 md:px-12">
      <div class="container mx-auto xl:px-32">
        <div class="grid items-center lg:grid-cols-2">
          <div class="mb-12 md:mt-12 lg:mt-0 lg:mb-0">
            <div class="block px-6 py-12 rounded-lg shadow-lg md:px-12 lg:-mr-14" style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px)">
              <h2 class="mb-12 text-3xl font-bold">Book a Photo Session</h2>
              <form method="POST" action="/contact">
                @csrf

               @auth
                <section class="my-3">
                  <span class="font-bold ">
                    Place your order, {{auth()->user()->name}}
                  </span>
                </section>

                @else
                <div class="mb-6 form-group">
                  <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="name" placeholder="Name" name="name" value="{{old('name')}}" />
                  @error('name')
                  <p class="text-xs text-red-500">{{$message}}</p>
                  @enderror
                </div>
                <div class="mb-6 form-group">
                  <input type="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="email" placeholder="Email address" name="email" value="{{old('email')}}" />
                  @error('email')
                  <p class="text-xs text-red-500">{{$message}}</p>
                  @enderror
                </div>
             @endauth
                <div class="mb-6 form-group">
                  <textarea class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="message" name="message" rows="3" placeholder="Message"></textarea>
                </div>
                <div class="mb-6 text-center form-group form-check">
                  <input type="checkbox" class="w-4 h-4 mt-1 mr-2 align-top transition duration-200 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-sm appearance-none cursor-pointer form-check-input checked:bg-blue-600 checked:border-blue-600 focus:outline-none" id="sendCopy" name="sendCopy" />
                  <label class="inline-block text-gray-800 form-check-label" for="sendCopy">Send me a copy of this message</label>
                </div>
                {{-- Options ckeckbox --}}
                <!--Default checkbox-->
                <div class="container mb-3">

                  <h3 class="mb-3 font-semibold underline underline-offset-4">What type of photo session are you interested in?</h3>
                  <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                    <input class="session_type relative float-left -ml-[1.5rem] mr-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]" type="checkbox" value="couples" name="session_type[]" id="couples" />
                    <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="couples">
                      Couples
                    </label>
                  </div>

                  <!--Maternity checkbox-->
                  <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                    <input class="session_type relative float-left -ml-[1.5rem] mr-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]" type="checkbox" value="maternity" name="session_type[]" id="maternityCheck" />
                    <label class="inline-block pl-[0.15rem] hover:cursor-pointer" for="maternityCheck">
                      Maternity
                    </label>
                    @error('session_type')
                    <p class="text-xs text-red-500">{{$message}}</p>
                    @enderror

                  </div>
                </div>

                <div class="relative m-auto mb-3" data-te-datepicker-init data-te-input-wrapper-init>
                  <input type="text" value="{{old('datepicker')}}" name='datepicker' id="datepicker" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" placeholder="Select a date" />

                  <label for="floatingInput" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Select a date</label>
                </div>
                @error('datepicker')
                <p class="text-xs text-red-500">{{$message}}</p>
                @enderror
                
                <button type="submit" class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                  Book a Photo Session
                </button>
              </form>
            </div>
          </div>
          <div class="md:mb-12 lg:mb-0">
            <div id="map" class="relative rounded-lg shadow-lg map-container">
              <!-- <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" class="absolute top-0 left-0 w-full h-full rounded-lg" frameborder="0" allowfullscreen></iframe> -->
              {{-- <iframe width='100%' height='700px' src="https://api.mapbox.com/styles/v1/diepulp/clhtet64u00pq01po9b49cxar.html?title=false&access_token=pk.eyJ1IjoiZGllcHVscCIsImEiOiJjbGh0ZThwbzgxNzloM25vNWNsYWc1anNiIn0.pK8-aeHwcwxP3gAA_olvjA&zoomwheel=false#10.1/47.6143/-122.3132" title="Navigation-copy" style="border:none;"></iframe> --}}


            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <div id="map"></div>


</x-layout>