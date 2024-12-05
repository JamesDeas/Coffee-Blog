@props(['heading'])

<section class="py-8 max-w-4xl mx-auto bg-white p-10 rounded-xl mt-10">

        <h1 style="font-family: 'shrikhand', serif; color: #3a2116;" class="text-4xl mb-8 pb-2 border-b">{{ $heading }}</h1>

        <div class="flex">

            <aside class="w-48 flex-shrink-0">

                <h4 class="font-semibold mb-4">Links</h4>

                <ul>

                    <li>
                        <a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-gray-600' : '' }}">All Posts</a>
                    </li>

                    <li>
                        <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'text-gray-600' : '' }}">New Post</a>
                    </li>
                </ul>
            </aside>

            <main class="flex-1">

                <x-panel>
                    {{ $slot }}
                </x-panel>

            </main>

        </div>

    </section>