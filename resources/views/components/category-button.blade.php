@props(['category'])

<a href="/?category={{ $category->slug }}"
    class="px-3 py-1 border rounded-full text-xs uppercase font-semibold" style="font-size: 10px; border-color: #6f4f37; color: #6f4f37; background-color: transparent;"
    >{{ $category->title }}</a>


