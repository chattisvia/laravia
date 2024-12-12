<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-8 max-w-screen-md">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900 hover:text-blue-500">{{ $post['title'] }}
        </h2>
        <div class="text-base text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | {{ $post -> created_at->format('j, F Y |')}} {{ $post -> created_at->diffForHumans()}}
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a href="/posts" class="font-medium hover:underline hover:text-blue-500">&laquo; Back to blog</a>
    </article>
</x-layout>