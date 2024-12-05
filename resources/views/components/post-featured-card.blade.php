@props (['post'])

<article
                class="transition-colors duration-300 bg-gray-100 hover:bg-gray-200 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                <div class="py-6 px-5 lg:flex">
                    <div class="flex-1 lg:mr-8">


                        <img src="{{ asset('storage/' . $post->thumbnail)}}" alt="Post Thumbnail" class="rounded-xl">


                    </div>

                    <div class="flex-1 flex flex-col justify-between">
                        <header class="mt-8 lg:mt-0">
                            <div class="space-x-2">

                                <x-category-button :category="$post->category" />

                            </div>

                            <div class="mt-4">
                                <h1 class="text-5xl" style="font-family: 'shrikhand', serif; color: #3a2116;">
                                    <a href="/posts/{{ $post->slug }}">
                                        {{ $post->title }}
                                    </a>
                                </h1>

                                <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                                    </span>
                            </div>
                        </header>

                        <div class="flex justify-start text-lg mt-2 space-y-4 w-full">
                            <div class="w-2/3"> 
                                {!! $post->excerpt !!}
                            </div>
                        </div>
                        <footer class="flex justify-between items-center mt-8">
                            <div class="flex items-center text-sm">
                                <img src="/storage/elements/avatar-1.png" alt="User Image" width="120">
                                <div class="ml-3">
                                    <h5 style="font-family: 'shrikhand', serif; color: #3a2116; font-weight:100;" class="text-lg font-bold"><a href="/?authors={{ $post->author->username }}">By {{ $post->author->name }}</a></h5>
                                </div>
                            </div>

                            <div class="hidden lg:block mr-10">
                                <a href="/posts/{{ $post->slug }}"
                                   class="transition-colors duration-300 text-xs font-semibold rounded-full py-2 px-8 text-white" style="border-top: 2px solid #3a2116; border-left: 6px solid #3a2116; border-right: 2px solid #3a2116; border-bottom: 6px solid #3a2116; background-color: #976c4f; hover:background-color: #5A3A2C; font-family: 'shrikhand', serif; font-weight:500;"
                                >Read More</a>
                            </div>
                        </footer>
                    </div>
                </div>
            </article>