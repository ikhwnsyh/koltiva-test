<x-app-layout>
    <div class="grid gap-2 lg:grid-cols-3 md:grid-cols-2 md:m-4">
        @foreach ($posts as $post)
            <div
                class="max-w-md lg:py-4 bg-white border shadow-sm lg:max-w-lg lg:px-6 rounded-xl hover:bg-gray-100 md:px-4 py-2.5">
                <header class="font-medium text-gray-700  px-4 py-2.5">{{ $post->body }}</header>
            </div>
        @endforeach
    </div>
</x-app-layout>
