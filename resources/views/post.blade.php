<x-layout>
    <x-slot:title>{{ $judul }}</x-slot:title>
    <x-slot:URL>{{ $URLTitle }}</x-slot:URL> 
    <article class="py-8 w-screen-md border-b border-gray-300 text-justify">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $blogspot['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="/authors/{{ $blogspot->author->username }}" >{{ $blogspot['author']->name }}</a> | {{ $blogspot->created_at->format('d F Y') }}
        </div>
        <p class="my-4 font-light">{{ $blogspot['body'] }}</p>
        <a class="font-medium text-blue-500 hover:underline"  href="/posts">&laquo; Kembali ke Halaman Blog</a>
        
    </article>
</x-layout>

