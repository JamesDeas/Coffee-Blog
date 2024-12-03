@props (['post'])
<article
                    {{ $attributes->merge(['class' => 'transition-colors duration-300 bg-gray-100 hover:bg-gray-200 m-5 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl']) }}> 
                    <div class="py-6 px-5">
                        <div>
                            <img src="{{ asset('storage/' . $post->thumbnail)}}" alt="Post Thumbnail" class="rounded-xl">
                        </div>

                        <div class="mt-8 flex flex-col justify-between">
                            <header>
                                <div class="space-x-2">
                                    <x-category-button :category="$post->category" />
                                </div>

                                <div class="mt-4">
                                    <h1 class="text-3xl">
                                        <a href="/posts/{{ $post->slug }}">
                                            {{ $post->title }}
                                        </a>
                                    </h1>

                                    <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                                    </span>
                                </div>
                            </header>

                            <div class="text-sm mt-4 space-y-4">
                        
                                    {!! $post->excerpt !!}
                                

                            </div>

                            <footer class="flex justify-between items-center mt-8">
                                <div class="flex items-center text-sm">
                                    <img src="/storage/elements/avatar-3.png" alt="User Image" width="80">
                                    <div class="ml-3">
                                        <h5 class="font-bold">
                                        <a href="/?authors={{ $post->author->username }}"> {{ $post->author->name }}</a></h5>
                                    </div>
                                </div>

                                <div>
                                    <a href="/posts/{{ $post->slug }}"
                                       class="transition-colors duration-300 text-xs font-semibold rounded-full py-2 px-8 text-white" style="background-color: #976c4f; hover:background-color: #5A3A2C;"
                                    >Read More</a>
                                </div>
                            </footer>
                        </div>
                    </div>
                </article>