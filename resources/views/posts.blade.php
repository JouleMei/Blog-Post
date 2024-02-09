@extends ('layout')

@section('banner')
        <h1 style>
            MY PERSONAL BLOG
        </h1>

@endsection

@section ('content')
    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{ $post->slug }}">
                {{ $post->title }}
                </a>
            </h1>

            <div style="line-height: 1.7;">
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
@endsection
