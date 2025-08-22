<x-layout :title="$title">

    <p>Welcome to home page</p>

    <div class="flex">
        @for ($i = 1; $i <= 10; $i++)
            @if ($i % 2 == 0)
                <div class="w-8 h-8 bg-teal-500 text-white p-0 me-1 text-xs grid place-items-center">
                    {{ $i }}
                </div>
            @endif
        @endfor
    </div>
</x-layout>
