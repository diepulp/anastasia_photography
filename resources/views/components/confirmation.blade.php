<!-- Jumbotron -->
<div class="p-6 m-40 shadow-lg rou5nded-lg bg-neutral-100 text-neutral-700 dark:bg-neutral-600 dark:text-neutral-200 dark:shadow-black/30">
 
  <section class="prose md:prose-sm lg:prose-lg prose-zinc">
    <h3 class="mb-5 font-semibold">Thank, you for your booking, {{$order->name}}</h3>
    <h5 class="underline underline-offset-8">Order summary:</h5>
    <div class="container mt-4 px-4">
      <p>Date: {{$order->session_date}}</p>
      <p>Session type: <span class="uppercase"> {{$order->session_type}}</span></p>
      <p>
        You will receive a confirmation email to <span class="underline ">{{$order->email}}</span> shortly
      </p>
      <p>
        Look forward to capture a glimplse of your insanity!
      </p>
    </div>-
  </section>

  <hr class="my-6 h-0.5 border-t-0 bg-neutral-200 opacity-100 dark:opacity-30" />

  <a href="/" type="button" data-te-ripple-init data-te-ripple-color="light" class="rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
    Home
  </a>
  <a href="#" type="button" data-te-ripple-init data-te-ripple-color="light" class="mx-3 rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
    Cancel your booking
  </a>
</div>
<!-- Jumbotron -->