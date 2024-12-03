<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">

            <h1 class="text-center font-bold text-xl">Log In!</h1>

            <form method="POST" action="/sessions" class="mt-10">

                @csrf
                

                <x-form.input name="email" type="email" />
                <x-form.input name="password" type="password" />
                


                <div class="mb-6">
                    <button type="submit" class="text-white rounded-xl py-2 px-4 hover:bg-brown-700" style="border: solid 2px #382114; background-color: #976c4f;">Log In</button>
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