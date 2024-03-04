<x-layout>
    <article>
        <h1>
            {{ $post->title }}
            ({{ $post->year}})
        </h1>

        <h4>
            <a href="#">{{  $post->category->name }}</a>
        </h4>

        <div>
            {!! $post->body !!}
        </div>
    </article>

    <a href="/">Go Back</a>
</x-layout>
