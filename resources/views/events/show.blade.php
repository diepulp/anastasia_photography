@props(['event'])
<x-layout>
<div class="flex justify-center">
<div class="container my-24 m-auto max-wd-sm md:px-6">

    <section class="mb-32">
      <div class="max-w-md">
        <img src="/storage/{{$event->thumbnail}}"
        class="mb-6 w-full rounded-lg shadow-lg dark:shadow-black/20" alt="image" />
      </div>
    

      <div class="mb-6 flex items-center">
        <img src="/storage/{{$event->thumbnail}}" class="mr-2 h-8 rounded-full" alt="avatar"
          loading="lazy" />
        <div>
          <span> Published <u>{{$event->published_on}}</u> by </span>
          <a href="#!" class="font-medium">Anastasiya</a>
        </div>
      </div>

      <h1 class="mb-6 text-3xl font-bold">
        {{$event->title}}
      </h1>

      <p class="prose lg:prose-xl">
        {{$event->description}}
      </p>
    </section>
  </div>
</div>
</x-layout>