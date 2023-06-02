<x-layout>
    <main class="max-w-lg mx-auto mt-10 h-screen">
    <section class="m-auto border border-gray-200 p-10 rounded">
    <header class="text-center">
        <h2 class="text-lg font-bold uppercase mb-1">
            Login to your account
        </h2>
    </header>

    <form action="/users/authenticate" method="POST">

        @csrf

        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2"
                >Email</label
            >
            <input
                type="email"
                class="border border-gray-200 rounded p-2 w-full"
                name="email"
                value="{{old('email')}}"
            />
         
            @error('email') 
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label
                for="password"
                class="inline-block text-lg mb-2"
            >
                Password
            </label>
            <input
                type="password"
                class="border border-gray-200 rounded p-2 w-full"
                name="password"
                value="{{old('password')}}"
            />

            @error('password') 
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6 bg-black">
            <button
                type="submit"
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
                Sign In
            </button>
        </div>

        <div class="mt-8">
            <p>
                Do not have an account?
                <a href="/register" class="text-laravel"
                    > Register</a
                >
            </p>
        </div>
    </form>
</section>
</main>
</x-layout>