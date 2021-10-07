@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<section class="container section-padding-top blog-section">
    <h2>Blog</h2>
    <div class="row align-items-start justify-content-between">
        <div class="col-md-8">
            @foreach($posts as $post)
            <ul class="post">
                <li>
                    @if($post->hasImage())
                    <img src="{{ asset('/storage/img/' . $post->article_image) }}" alt="{{ $post->article_image_alt }}" class="img-fluid mb-4">
                    @endif
                    <h3>{{ $post->article_title }}</h3>
                    <p>{{ $post->article_description }}</p>
                </li>
                <li class="mt-4">
                    <a href="{{ route('article', ['id' => $post->article_id]) }}" class="btn-call-to-action">Ver artículo</a>
                </li>
            </ul>
            @endforeach
        </div>
        <div class="col-md-3 other-articles text-center">
            <h3 class="mb-5">Otros artículos de interés</h3>
            @foreach($randomPosts as $randomPost)
            <ul class="random-post">
                <li>
                    @if($randomPost->hasImage())
                    <img src="{{ asset('/storage/img/' . $randomPost->article_image) }}" alt="{{ $randomPost->article_image_alt }}" class="img-fluid mb-4">
                    @endif
                    <h4 class="mb-4">{{ $randomPost->article_title }}</h4>
                </li>
                <li>
                    <a href="{{ route('article', ['id' => $randomPost->article_id]) }}" class="btn-call-to-action">Ver articulo</a>
                </li>
            </ul>
            @endforeach
        </div>
    </div>
</section>
@endsection