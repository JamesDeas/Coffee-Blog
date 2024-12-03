<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<style>

    html{
        scroll-behaviour: smooth;
    }
    
</style>


<body style="font-family: 'Merriweather', serif; background-image: url('storage/elements/brick-bg.png'); background-size: cover; background-position: center;">

    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/storage/elements/mycoffee-logo.png" alt="My Coffee Logo" width="250" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">

                @auth

                    <x-dropdown>

                        <x-slot name="trigger">

                            <button class="ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5" style="border: solid 2px #371f15; background-color: #6F4E37; hover:background-color: #5A3A2C;">Welcome, {{ auth()->user()->name }}!</button>

                        </x-slot>

                        @if (auth()->user()->can('admin'))

                            <x-dropdown-item href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-gray-600' : '' }}">All Posts</x-dropdown-item>
                            <x-dropdown-item href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'text-gray-600' : '' }}">New Post</x-dropdown-item>
                        @endif
                        
                        <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Log Out</x-dropdown-item>

                        <form id="logout-form" method="POST" action="/logout" class="hidden">
                            @csrf
                        </form>

                    </x-dropdown>
                    
                @else
                    <a href="/register" class="text-sm font-bold uppercase text-white {{ request()->is('register') ? 'text-gray-300' : '' }}" style="background-color: #976c4f; padding: 8px 16px; border: solid 2px #371f15; border-radius: 12px;">Register</a>
                    <a href="/login" class="ml-6 text-sm font-bold uppercase text-white {{ request()->is('login') ? 'text-gray-300' : '' }}" style="background-color: #976c4f; padding: 8px 16px; border: solid 2px #371f15; border-radius: 12px;">Log In</a>
                @endauth

                {{-- <a href="#newsletter" class="ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5" style="background-color: #6F4E37; hover:background-color: #5A3A2C;">
                    Subscribe for Updates
                </a> --}}
            </div>
        </nav>



        {{ $slot }}

       

        <footer id="newsletter" class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="/storage/elements/avatar-2.png" alt="" class="mx-auto mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3">Find your next coffee spot or even new recipes!</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    @if (session('success'))
                        <div style="background-color: #371f15; color: #ffffff; padding: 10px; border: 1px solid #6F4E37; border-radius: 5px; margin-bottom: 15px;">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('subscribe') }}">
                        @csrf
                        <input id="email" type="email" name="email" placeholder="Your email address" required>
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </footer>
    </section>

    <x-flash />

</body>
