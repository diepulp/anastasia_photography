<x-layout>
  @include('/partials._nav')
<!-- Container for demo purpose -->
<div class="container px-6 mx-auto my-24">

    <!-- Section: Design Block -->
    <section class="mb-32 text-center text-gray-800">
      <style>
        .map-container {
          height: 700px;
          z-index: -1;
        }
      </style>
      <div class="px-6 py-12 md:px-12">
        <div class="container mx-auto xl:px-32">
          <div class="flex grid items-center lg:grid-cols-2">
            <div class="mb-12 md:mt-12 lg:mt-0 lg:mb-0">
              <div
                class="block px-6 py-12 rounded-lg shadow-lg md:px-12 lg:-mr-14"
                style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px)"
              >
              <h2 class="mb-12 text-3xl font-bold">Contact us</h2>
              <form>
                <div class="mb-6 form-group">
                  <input
                    type="text"
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    id="exampleInput7"
                    placeholder="Name"
                  />
                </div>
                <div class="mb-6 form-group">
                  <input
                    type="email"
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    id="exampleInput8"
                    placeholder="Email address"
                  />
                </div>
                <div class="mb-6 form-group">
                  <textarea
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    id="exampleFormControlTextarea13"
                    rows="3"
                    placeholder="Message"
                  ></textarea>
                </div>
                <div class="mb-6 text-center form-group form-check">
                  <input
                    type="checkbox"
                    class="w-4 h-4 mt-1 mr-2 align-top transition duration-200 bg-white bg-center bg-no-repeat bg-contain border border-gray-300 rounded-sm appearance-none cursor-pointer form-check-input checked:bg-blue-600 checked:border-blue-600 focus:outline-none"
                    id="exampleCheck87"
                    checked
                  />
                  <label class="inline-block text-gray-800 form-check-label" for="exampleCheck87"
                    >Send me a copy of this message</label
                  >
                </div>
                <button
                  type="submit"
                  class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                >
                  Send
                </button>
              </form>
              </div>
            </div>
            <div class="md:mb-12 lg:mb-0">
              <div class="relative rounded-lg shadow-lg map-container">
                <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" class="absolute top-0 left-0 w-full h-full rounded-lg" frameborder="0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->
  
  </div>
  <!-- Container for demo purpose -->

</x-layout>