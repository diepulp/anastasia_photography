<!DOCTYPE html>
<html class="w-auto" lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anastasiya Photography</title>
  {{-- Favicaon --}}
  <link rel="icon" href="images/favicon.ico" />

  {{-- Font Awesom --}}
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
  />

  {{-- Alpine JS --}}
  <script src="//unpkg.com/alpinejs" defer></script>

  <!-- Mapbox -->
  <link href="https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.css" rel="stylesheet">
  <script src="https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.js"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Roboto font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />

  <!-- Tailwind Elements styles-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />

  <!-- Tailwind CSS config -->
  <script src="https://cdn.tailwindcss.com/3.3.0"></script>
  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        fontFamily: {
          sans: ["Roboto", "sans-serif"],
          body: ["Roboto", "sans-serif"],
          mono: ["ui-monospace", "monospace"],
        },
      },
      corePlugins: {
        preflight: false,
      },
    };
  </script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-screen">
<div class="sticky top-0">
  {{-- <a href="#footer">Go to footer</a> --}}

</div>
  <x-nav />
  {{ $slot }}

  <x-flash />
  <x-footer />

  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

  

</body>

</html>