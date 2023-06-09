
<x-layout>
    <section class="h-screen">
        @foreach ($events as $event )
        <a href="/events/{{$event->id}}"><p>{{$event->title}}</p></a>
        
        <img src="{{$event->thumbnail}}" alt="img">
        @endforeach
       
    </section>
</x-layout>