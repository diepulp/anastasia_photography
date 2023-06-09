<x-layout>
    <x-panel class=" mt-10 mx-5 ">
        <div class="flex flex-center">
    <section class="px-6 py-8 flex flex-center">
        <form action="/admin" method="post">
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
                    required
                >
                @error('location')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label 
                    class="block mb-2 font-bold text-xs text-gray-600"
                    for="date">
                 Select a date
                </label>
                <input type="date" class="border border-gray-400 p-2 w-full"
                    type="text"
                    name="date"
                    id="date"
                    required
                >
                @error('date')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label 
                    class="block mb-2 font-bold text-xs text-gray-600"
                    for="time">
                 Select the time event takes place
                </label>
                <input type="time" class="border border-gray-400 p-2 w-full"
                    type="text"
                    name="time"
                    id="time"
                    required
                >
                @error('time')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label 
                    class="block mb-2 font-bold text-xs text-gray-600"
                    for="title">
                 Upload a thumbnail for the event
                </label>
                <input type="text" class="border border-gray-400 p-2 w-full"
                    type="text"
                    name="title"
                    id="title"
                    
                >
                @error('title')
                    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
                @enderror
            </div>
            <x-button>Publish</x-button>
        </form>
        <div class="map-container flex flex-center">
            <div class="w-96 h-auto max-w-sm top-6 mx-20" id="map"></div>
    
        </div>
    </section>

    
</div>
    </x-panel>
</x-layout>