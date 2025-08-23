<x-layout :title="$title">

    {{-- <article class="py-8 max-w-screen-sm">
        <h2 class="mb-1 text-3xl font-bold tracking-tight text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <div class="text-base text-gray-500">
                By <a href="/authors/{{ $post->author->username }}"
                    class="text-gray-900 hover:underline">{{ $post->author->name }}</a>
                In <a href="/categories/{{ $post->category->slug }}"
                    class="text-gray-900 hover:underline">{{ $post->category->name }}</a>
                | 1 January 2025
            </div>
        </div>
        <p class="mt-3 font-light">{{ $post['body'] }}</p>
        <a href="/blog" class=" font-medium text-blue-400 hover:underline">&laquo; Back to all blog</a>
    </article> --}}

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <a href="/blog" class="font-medium text-xs text-blue-400 hover:underline">&laquo; Back to all blog</a>
                <header class="my-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                            <div>
                                <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                                <p class="text-base text-gray-500 dark:text-gray-400">{{ $post->category->name }}</p>
                                <p class="text-base text-gray-500 dark:text-gray-400">
                                    {{ $post->created_at->diffForHumans() }}
                                </p>
                            </div>
                        </div>
                    </address>
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                       {{ $post['title'] }}
                    </h1>
                </header>
                <p class="lead">{{ $post['body'] }}</p>
            </article>
        </div>
    </main>
</x-layout>
