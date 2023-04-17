<!DOCTYPE html>
<html class="w-3/4 mx-auto" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo</title>
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-400">

    <nav class="">
        <div class="container border flex items-center justify-end px-4 py-6">
            <ul class='flex justify-start border gap-1'>
                {{-- duplicate a line shift + alt + dowm --}}
                {{-- CTRL+ALT+DOWN multi cursor --}}
                <li class=" hover:text-white w-32 text-white hover:bg-sky-700 px-5 ml-6">About</li>
                <li class=" hover:text-white w-32 text-white hover:bg-sky-700 px-5 ml-6">Gallery</li>
                <li class=" hover:text-white w-32 text-white hover:bg-sky-700 px-5 ml-6">Pricing</li>
                <li class=" hover:text-white w-32 text-white hover:bg-sky-700 px-5 ml-6">Booking</li>
            </ul> 
            <div class="relative">
                <i class="absolute text-white mt-1 ml-4 fa-solid fa-magnifying-glass"></i>
                <input type="text" class="bg-gray-800 rounded-full w-64 px-10 py-1 
                 focus:outline-none text-sm" placeholder="Search">
            </div>   
        </div> 
    </nav>

 
    <h2 class="container text-red-400 bg-grey-900s">Home Page</h2>
    

    <div class="container bg-grey-900s flex items-center flex-col">
        <div class="border text-white w-24 bg-red-400 py-4 px-4 flex justify-center">1</div>
        <div class="border text-white w-24 bg-blue-400 py-1 flex justify-center" ">3</div>
        <div class="border text-white w-24 bg-blue-400 py-1 flex justify-center" ">2</div>
        <div class="border text-white w-24 bg-blue-400 py-8 flex justify-center" >3</div>
    </div>

        <div class="container mx-auto flex ">
            
        
        <article class="prose lg:prose-xl">
            <h3>Typography <i class="fa-solid fa-gear"></i></h3>
            <span><i class="fa-regular fa-envelope"></i></span><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, labore!</p>
        </article>
      
    </div>
    <button class="bg-sky-500 hover:bg-sky-700 hover:text-red-400">
        Save changes
      </button>

      <div class="container grid grid-rows-auto my-10 grid-cols-3 border gap-4 bg-gray-400">
    
        <img src="{{ asset('images/nika.jpg') }}" alt="nika" class="w-auto">
        <img src="{{ asset('images/nika.jpg') }}" alt="nika" class="w-auto">
        <img src="{{ asset('images/nika.jpg') }}" alt="nika" class="w-auto">
        <img src="{{ asset('images/nika.jpg') }}" alt="nika" class="w-auto">
      </div>
</body>
<div
  class="max-w-xs rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
  <img
    src="{{ asset('images/nika.jpg') }}"
    class="rounded-t-lg"
    alt="..." />
  <div class="p-6">
    <h5
      class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
      Card title
    </h5>
    <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
      Some quick example text to build on the card title and make up the
      bulk of the card's content.
    </p>
    <button
      type="button"
      class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
      data-te-ripple-init
      data-te-ripple-color="light">
      Go somewhere
    </button>
  </div>
</div>
<div
  class="max-w-xs rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700"
  aria-hidden="true">
  <img
    src="https://tecdn.b-cdn.net/img/new/standard/nature/182.webp"
    class="rounded-t-lg"
    alt="..." />
  <div class="p-6">
    <h5
      class="mb-2 animate-pulse text-xl font-medium text-neutral-900 dark:text-white">
      <span
        class="inline-block min-h-[1em] w-6/12 flex-auto cursor-wait bg-current align-middle opacity-50"></span>
    </h5>
    <p
      class="mb-4 animate-pulse text-base text-neutral-700 dark:text-white">
      <span
        class="inline-block min-h-[1em] w-7/12 flex-auto cursor-wait bg-current align-middle opacity-50"></span>
      <span
        class="inline-block min-h-[1em] w-4/12 flex-auto cursor-wait bg-current align-middle opacity-50"></span>
      <span
        class="inline-block min-h-[1em] w-4/12 flex-auto cursor-wait bg-current align-middle opacity-50"></span>
      <span
        class="inline-block min-h-[1em] w-6/12 flex-auto cursor-wait bg-current align-middle opacity-50"></span>
      <span
        class="inline-block min-h-[1em] w-8/12 flex-auto cursor-wait bg-current align-middle opacity-50"></span>
    </p>
    <a
      href="#"
      tabindex="-1"
      class="inline-block min-h-[1em] w-6/12 flex-auto cursor-wait rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white opacity-50 shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out before:inline-block before:content-[''] hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"></a>
  </div>
</div>

</html>