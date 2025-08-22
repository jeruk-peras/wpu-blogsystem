<x-layout :title="$title">

    <article class="py-8 max-w-screen-sm">
        <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="">{{ $post->author->name; }}</a>
        </div>
        <p class="mt-3 font-light">{{ $post['body'] }}</p>
        <a href="/blog" class=" font-medium text-blue-400 hover:underline">&laquo; Back to all blog</a>
    </article>

</x-layout>
