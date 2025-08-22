<x-layout :title="$title">

    @foreach ($arrayPost as $row)
        <article class="py-8 max-w-screen-sm border-b border-gray-400">
            <a href="/blog/{{ $row['slug'] }}">
                <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">{{ $row['title'] }}</h2>
            </a>
            <div class="text-base text-gray-500">
                By <a href="/authors/{{ $row->author->username }}" class="text-gray-900 hover:underline">{{ $row->author->name; }}</a>
                In <a href="/categories/{{ $row->category->slug }}" class="text-gray-900 hover:underline">{{ $row->category->name }}</a>
                | 1 January 2025
            </div>
            <p class="mt-3 font-light">{{ Str::limit($row['body'], 100) }}</p>
            <a href="/blog/{{ $row['slug'] }}" class=" font-medium text-blue-400 hover:underline">Read More &raquo;</a>
        </article>
    @endforeach

</x-layout>
