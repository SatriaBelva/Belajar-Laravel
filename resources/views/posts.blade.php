<x-layout>
    <x-slot:title>{{ $judul }}</x-slot:title>
    <x-slot:testing>{{ $judul }}</x-slot:testing>
    <x-slot:URL>{{ $URLTitle }}</x-slot:URL> 

    @foreach ($posts as $post)
    <article class="py-8 w-screen-md border-b border-gray-300 text-justify">
        <a href="/posts/{{ $post['slug'] }}">
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
        </a>
        
        <div class="text-base text-gray-500">
            <a class="hover:underline" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}  </a> in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>  | {{ $post->created_at->format('d F Y') }} {{ $post->created_at->diffForHumans() }}
        </div>
        <a href="/posts/{{ $post['slug'] }}">
            <p class="my-4 font-light">{{ Str::limit($post['body'], 200) }}</p>
        </a>
        <a class="font-medium text-blue-500 hover:underline"  href="/posts/{{ $post['slug'] }}">Read More &raquo;</a>
    </article>
    @endforeach

</x-layout>

