<x-layout>
    <x-slot:title>{{ $judul }}</x-slot:title>
    <x-slot:URL>{{ $URLTitle }}</x-slot:URL> 
    <article class="py-8 w-screen-md border-b border-gray-300">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['judul'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="https://instagram.com/satriabelva" target="blank">{{ $post['author'] }}</a> | 31 Agustus 2024
        </div>
        <p class="my-4 font-light">{{ $post['body'] }}</p>
        <a class="font-medium text-blue-500 hover:underline"  href="/posts">&laquo; Kembali ke Halaman Blog</a>
    </article>
</x-layout>

