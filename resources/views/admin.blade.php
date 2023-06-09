<x-layout>
    <x-panel class=" m-9 ">

        <h3 class="font-semibold text-lg mx-auto">Publish a new event</h3>
      
    <section class="px-6 py-8 flex flex-center">
        
        <form action="/admin" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label 
                    class="block mb-2 font-bold text-xs text-gray-600"
                    for="title">
                 Create a title for an event
                </label>
                <input type="text" class="border rounded border-gray-400 p-2 w-full"
                    type="text"
                    name="title"
                    id="title"
                    value="{{old('title')}}"
                    required
                >
                @error('title')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label 
                    class="block mb-2 font-bold text-xs text-gray-600"
                    for="location">
                Select a location
                </label>
                <input type="text" class="border rounded border-gray-400 p-2 w-full"
                    type="text"
                    name="location"
                    id="location"
                    value="{{old('location')}}"
                    required
                >
                @error('location')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label 
                    class="block mb-2 font-bold text-xs text-gray-600"
                    for="event_date">
                 Select a date for an event
                </label>
                <input 
                    class="border border-gray-400 p-2 w-full"
                    type="date"
                    name="event_date"
                    id="event_date"
                    value="{{old('date')}}"
                    required
                >
                @error('date')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label 
                    class="block mb-2 font-bold text-xs text-gray-600"
                    for="event_time">
                 Select the time event takes place
                </label>
                <input
                    class="border border-gray-400 p-2 w-full"
                    type="time"
                    name="event_time"
                    id="event_time"
                    value="{{old('time')}}"
                    required
                >
                @error('time')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block mb-2 font-bold text-xs text-gray-600" 
                       for="thumbnail">
                       Upload an image for the event
                </label>
                <input 
                    type="file"
                    name="thumbnail"
                    id='thumbnail'
                    
                >
            </div>
          
            <x-button>Publish</x-button>
        </form>
        <div class="map-container flex flex-center">
            
            <div class="w-96 h-auto max-w-sm top-6 mx-20" id="map"></div>
    
        </div>
      
    </section>
    </x-panel>
</x-layout>