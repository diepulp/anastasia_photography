
<x-layout>
   
    @foreach($bookings as $booking)
    <h3>{{$booking->name}}</h3>
    <a href="/booking/{{$booking->type}}"><span class="font-bold">Go to booking</span></a>
    @endforeach

</x-layout>