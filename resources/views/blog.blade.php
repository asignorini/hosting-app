@extends('layouts.app')

@section('content')
<section class="container section-padding-top">
    <h2 class="mt-5 text-center mb-5">Seccion de blog</h2>
    <div class="row align-items-start justify-content-between">
        <div class="col-md-8">
            @foreach($posts as $post)
            <ul class="mb-5">
                <li>
                    @if($post->hasImage())
                    <img src="{{ asset('/storage/img/' . $post->article_image) }}" alt="{{ $post->article_image_alt }}" class="img-fluid">
                    @endif
                    <h3>{{ $post->article_title }}</h3>
                    <p>{{ $post->article_description }}</p>
                </li>
                <li>
                    <a href="{{ route('article', ['id' => $post->article_id]) }}" class="btn btn-primary">Ver artículo</a>
                </li>
            </ul>
            @endforeach
        </div>
        <div class="col-md-3">
            <h3 class="mb-5">Otros posts de interés</h3>
            @foreach($randomPosts as $randomPost)
            <ul class="mb-3">
                <li>
                    @if($randomPost->hasImage())
                    <img src="{{ asset('/storage/img/' . $post->article_image) }}" alt="{{ $post->article_image_alt }}" class="img-fluid">
                    @endif
                    <h4>{{ $randomPost->article_title }}</h4>
                </li>
                <li>
                    <a href="{{ route('article', ['id' => $randomPost->article_id]) }}" class="btn btn-primary">Ver articulo</a>
                </li>
            </ul>
            @endforeach
        </div>
    </div>
</section>
@endsection