<x-layout>
    @foreach ($posts as $post)
        <article>
            <h1>
                {!! $post->title !!}
                ({!! $post->year !!})
            </h1>

            <h4>
                <a href="#">{{  $post->category->name }}</a>
            </h4>

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
