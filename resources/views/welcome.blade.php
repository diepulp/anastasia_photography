{{-- @extends('components.layout') --}}
<x-layout>
    @include('partials._nav')
    @include('partials._hero')
    
    
    <body class="bg-gray-100">
    
      {{-- PROJECTS COMPONENT --}}
      <x-projects />
    
     
        <nav class="bg-red-500">
            <div class="container flex items-center justify-end px-4 py-6 border">
                <ul class='flex justify-start gap-1 border'>
                    {{-- duplicate a line shift + alt + dowm --}}
                    {{-- CTRL+ALT+DOWN multi cursor --}}
                    <li class="w-32 px-5 ml-6 text-white hover:text-white hover:bg-sky-700">About</li>
                    <li class="w-32 px-5 ml-6 text-white hover:text-white hover:bg-sky-700">Gallery</li>
                    <li class="w-32 px-5 ml-6 text-white hover:text-white hover:bg-sky-700">Pricing</li>
                    <li class="w-32 px-5 ml-6 text-white hover:text-white hover:bg-sky-700">Booking</li>
                </ul> 
                <div class="relative">
                    <i class="absolute mt-1 ml-4 text-white fa-solid fa-magnifying-glass"></i>
                    <input type="text" class="w-64 px-10 py-1 text-sm bg-gray-800 rounded-full focus:outline-none" placeholder="Search">
                </div>   
            </div> 
        </nav>
    
    
          <div class="container grid grid-cols-3 gap-4 my-10border grid-rows-auto">
        
            <img src="{{ asset('images/nika.jpg') }}" alt="nika" class="w-auto">
            <img src="{{ asset('images/nika.jpg') }}" alt="nika" class="w-auto">
            <img src="{{ asset('images/nika.jpg') }}" alt="nika" class="w-auto">
            <img src="{{ asset('images/nika.jpg') }}" alt="nika" class="w-auto">
          </div>
    
    
    
    </body>
    <!-- Button trigger modal -->
    @include('partials._modal')
    
      <!--Footer component-->
    @include('components.footer')
    
    </x-layout>