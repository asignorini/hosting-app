@extends('layouts.admin')

@section('content')
<section>
    <h2>Edicion del post: {{ $article->article_title }} </h2>

    <form class="my-5" action="{{ route('admin.posts.update', ['id' => $article->article_id]) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Título principal del artículo.</label>
            <input type="text" class="form-control" id="title" value=" {{ $article->article_title }} " name="title">
        </div>
        <div class="form-group">
            <label for="description">Pequeña descripción del artículo.</label>
            <input type="text" class="form-control" id="description" value="{{ $article->article_description }}" name="description">
        </div>
        <div class="form-group">
            <label for="article-text">Contenido del artículo</label>
            <textarea class="form-control" id="article-text" rows="10" name="article-text">{{ $article->article_text }}</textarea>
        </div>
        <div class="form-group">
            <label for="article-image">Imagen del artículo</label>
            <input type="file" class="form-control-file" id="article-image">
        </div>
        <div class="form-group">
            <label for="article-image-alt">Pie de imagen</label>
            <input type="text" class="form-control" id="article-image-alt" placeholder="Descripción de la imagen">
        </div>
        <button class="btn btn-primary" type="submit">Editar post</button>
    </form>
</section>
@endsection