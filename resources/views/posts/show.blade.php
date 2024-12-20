<x-layout> 

    <body style="background-image: url('{{ asset('storage/elements/brick-bg.png') }}'); background-size: cover; background-position: center;">
        <section class="px-6 py-8">

            <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
                <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10 bg-white p-10 rounded-xl">
                    <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                        <img src="{{ asset('storage/' .$post->thumbnail) }}" alt="" class="rounded-xl">

                        <p class="mt-4 block text-gray-400 text-xs">
                            Published <time>{{ $post->created_at->diffForHumans() }}</time>
                        </p>

                        <div class="flex items-center lg:justify-center text-sm mt-4">
                            <img src="/storage/elements/avatar-1.png" alt="James Avatar" width="80">
                            <div class="ml-3 text-left">
                                <h5 class="font-bold"><a href="/?authors={{ $post->author->username }}"> {{ $post->author->name }}</a></h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-8">
                        <div class="hidden lg:flex justify-between mb-6">
                            <a href="/"
                                class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                                <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                    <g fill="none" fill-rule="evenodd">
                                        <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                        </path>
                                        <path class="fill-current"
                                            d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                        </path>
                                    </g>
                                </svg>

                                Back to Posts
                            </a>

                            <div class="space-x-2">
                                <x-category-button :category="$post->category" />
                            </div>
                        </div>

                        <h1 class="font-bold text-3xl lg:text-4xl mb-10" style="font-family: 'shrikhand', serif; color: #3a2116; font-weight:100;">
                            {{ $post->title }}
                        </h1>

                        <div class="space-y-4 lg:text-lg leading-loose">
                            {!! $post->body !!}
                        </div>
                    </div>

                    <section class="col-span-8 col-start-5 mt-10 space-y-6">

                        @auth

                            <x-panel>

                                <form method="POST" action="/posts/{{ $post->slug }}/comments">
                                    @csrf

                                    <header class="flex items-center">
                                        <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40" class="rounded-full">
                                        <h2 class="ml-4">Want to participate?</h2>
                                    </header>

                                    <div class="mt-6">
                                        <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" rows="5" placeholder="Quick, think of something to say!" required></textarea>

                                        @error('body')
                                            <span class="text-xs text-red-500">{{ $message }}</span>
                                        @enderror

                                    </div>

                                    <div class="flex justify-end mt-5">
                                       <x-submit-button>Post</x-submit-button>
                                    </div>



                                </form>

                            </x-panel>

                        @else

                            <p class="font-semibold"><a href="/register" class="text-blue-500 hover:underline">Register</a> or <a href="/login" class=" text-blue-500 hover:underline">Log In</a> to leave a comment.</p>

                        @endauth

                        @foreach ($post->comments as $comment)
                            <x-post-comment :comment="$comment"/>
                        @endforeach


                    </section>


                </article>
            </main>
        </section>
    </body>

    
</x-layout>