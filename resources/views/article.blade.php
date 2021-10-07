@extends('layouts.app')

@section('title', 'Artículo')

@section('content')

<section class="container section-padding-top text-center">
    <h2 class="text-center mb-5">{{ $article->article_title}}</h2>
    @if($article->hasImage())
    <img src="{{ asset('/storage/img/' . $article->article_image) }}" alt="{{ $article->article_image_alt }}" class="img-fluid mb-4">
    @else
    <p>(Este post no tiene imagen aún)</p>
    @endif
    <p class="mb-5"> {{ $article->article_description }} </p>
    <hr class="mb-5">
    <ul>
        <li>
            <h3 class="mb-4">Contenido del artículo</h3>
            <p class="text-left">
                {{ $article->article_text }}
            </p>
        </li>
        <li><small> Fecha de publicación: {{ $article->created_at }} |</small>
            <small> Categoria: {{ $category->category_name }} </small>
        </li>
    </ul>
</section>
@endsection