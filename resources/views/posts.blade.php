<x-layout>
    @foreach ($posts as $post)
        <article>
            <h1>
                    {!! $post->title !!}
            </h1>

            <div>
                {{ $post->excerpt }}
            </div>

            <p>
                <a href="/posts/{{ $post->slug }}">
                    Read more
                </a>
            </p>
        </article>
    @endforeach
</x-layout>
