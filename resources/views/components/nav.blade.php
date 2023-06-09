<header>
    <!-- Navigation bar -->
    <nav
      class="relative flex items-center justify-between w-full py-2 bg-white shadow-lg text-neutral-600 hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 dark:text-neutral-200 md:flex-wrap md:justify-start"
      data-te-navbar-ref>
      <div class="flex flex-wrap items-center justify-between w-full px-3">
        <div class="flex items-center">
          <!-- Hamburger menu button -->
          <button
            class="px-2 text-xl leading-none transition-shadow duration-150 ease-in-out bg-transparent border-0 hover:text-neutral-700 focus:text-neutral-700 dark:hover:text-white dark:focus:text-white lg:hidden"
            type="button"
            data-te-collapse-init
            data-te-target="#navbarSupportedContentX"
            aria-controls="navbarSupportedContentX"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <!-- Hamburger menu icon -->
            <span class="[&>svg]:w-5">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-7 w-7">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
            </span>
          </button>
        </div>
  
        <!-- Navigation links -->
        <div
          class="!visible hidden grow basis-[100%] items-center lg:!flex lg:basis-auto"
          id="navbarSupportedContentX"
          data-te-collapse-item>
          <ul
            class="flex flex-col mr-auto lg:flex-row"
            data-te-navbar-nav-ref>
            <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
              <a
                class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                href="/"
                data-te-nav-link-ref
                data-te-ripple-init
                data-te-ripple-color="light"
                >Home</a
              >
            </li>
            <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
              <a
                class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                href="/gallery"
                data-te-nav-link-ref
                data-te-ripple-init
                data-te-ripple-color="light"
                >Gallery</a
              >
            </li>
            <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
              <a
                class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                href="/pricing"
                data-te-nav-link-ref
                data-te-ripple-init
                data-te-ripple-color="light"
                >Pricing</a
              >
            </li>
            <li class="mb-2 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
              <a
                class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                href="/about"
                data-te-nav-link-ref
                data-te-ripple-init
                data-te-ripple-color="light"
                >About</a
              >
            </li>
            <li class="mb-2 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
              <a
                class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                href="/events"
                data-te-nav-link-ref
                data-te-ripple-init
                data-te-ripple-color="light"
                >Events</a
              >
            </li>
            <li class="mb-2 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
              <a
                class="block transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:hover:text-white dark:focus:text-white lg:p-2 [&.active]:text-black/90"
                href="/contact"
                data-te-nav-link-ref
                data-te-ripple-init
                data-te-ripple-color="light"
                >Contact</a
              >
            </li>

          </ul>

          {{-- Login links --}}
          <ul class="flex space-x-6 mr-6 text-lg">

{{-- If logged in.. --}}
        @auth
        <li>
          <span class="font-thin underline underline-offset-4">
            Welcome, {{auth()->user()->name}}
          </span>
        </li>
        {{-- <li>
          <a href="/plans/manage" class="hover:text-laravel"><i class="fa-solid fa-gear"></i> Manage Plans</a>
        </li> --}}
        <li>
          <form class="inline" method="POST" action="/logout">
            @csrf
            <button type="submit">
              <i class="fa-solid fa-door-closed"></i> Logout
            </button>
          </form>
        </li>
  {{-- Not logged in --}}
        @else
        <li>
          <a href="/register" class="hover:text-green-600"><i class="fa-solid fa-user-plus "></i> Register</a>
        </li>
        <li>
          <a href="/login" class="hover:text-green-600"><i class="fa-solid fa-arrow-right-to-bracket "></i> Login</a>
        </li>
        @endauth
      </ul>
        </div>
      </div>
    </nav>

    
  
   
  </header>