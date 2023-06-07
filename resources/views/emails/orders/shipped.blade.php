@props(['url' => "daydreamcreations.me"])
<x-mail::header url="slot goed here">
</x-mail::header>
<x-mail::message url="URl ggoes here">
# Hello, {{ $order->name}}
## The photo session {{ $order->session_type}} was scheduled on {{ $order->datepicker}}
     The attached is the contract for you to review and sign
     Look forward for our session
     Best, Anastasiya

{{$order->name}}, Your order has been received

<x-mail::panel >
    

</x-mail::panel>

<x-mail::subcopy >
    Sent from daydreamcreations.me
</x-mail::subcopy>

<x-mail::button :url="$url">
Button Text
</x-mail::button>
Thanks,<br>
{{-- {{ config('app.name') }} --}}
Anastasiya
</x-mail::message>


