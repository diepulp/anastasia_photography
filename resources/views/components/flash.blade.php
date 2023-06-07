
@if (session()->has('message'))
<<div x-data="{show: true}"
      x-init="setTimeout(() => show = false, 4000)"
      x-show="show"
  class="bg-blue-400 bottom-3 fixed p-3 right-3 rounded-2xl text-sm text-white">
  <p>{{ session('message')}}</p>

  @endif
</div>