<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">

            <h1 class="text-center font-bold text-xl">Register</h1>

            <form method="POST" action="/register" class="mt-10">
                @csrf

                <div class="mb-6">

                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">Name</label>

                    <input class="border border-gray-200 p-2 w-full rounded" type="text" name="name" id="name" value="{{ old('name') }}" required>

                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-6">

                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">Username</label>

                    <input class="border border-gray-200 p-2 w-full rounded" type="text" name="username" id="username" value="{{ old('username') }}" required>

                    @error('username')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-6">

                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">Email</label>

                    <input class="border border-gray-200 p-2 w-full rounded" type="email" name="email" id="email" value="{{ old('email') }}" required>

                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                </div>



                <div class="mb-6">

                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">Password</label>

                    <input class="border border-gray-200 p-2 w-full rounded" type="password" name="password" id="password" required>

                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <button type="submit" class="text-white rounded-xl py-2 px-4 hover:bg-brown-700"  style="border-top: 2px solid #3a2116; border-left: 6px solid #3a2116; border-right: 2px solid #3a2116; border-bottom: 6px solid #3a2116; background-color: #976c4f; hover:background-color: #5A3A2C; font-family: 'shrikhand', serif; font-weight:500;">Submit</button>
                </div>

                {{-- @if ($errors->any())

                    <ul>

                        @foreach ($errors->all() as $error)
                            <li class="text-red-500 text-xs">{{ $error }}</li>
                        @endforeach
                        
                    </ul>

                @endif --}}

            </form>
        </main>
    </section>
</x-layout>