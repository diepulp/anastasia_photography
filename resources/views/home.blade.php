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

<body class="bg-red-400">

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
</body>

</html>