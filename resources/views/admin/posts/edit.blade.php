@extends('layouts.admin')

@section('content')
<h2>Edicion del post: {{ $article->title }} </h2>

<form class="my-5" action="{{ route('admin.posts.update', ['id' => $article->id]) }}" method="post">
    @csrf
    <div class="form-group">
        <label for="title">Título principal del artículo.</label>
        <input type="text" class="form-control" id="title" value=" {{ $article->title }} " name="title">
    </div>
    <div class="form-group">
        <label for="description">Pequeña descripción del artículo.</label>
        <input type="text" class="form-control" id="description" value="{{ $article->short_description }}" name="description">
    </div>
    <div class="form-group">
        <label for="article-text">Contenido del artículo</label>
        <textarea class="form-control" id="article-text" rows="10" name="article-text">{{ $article->text }}</textarea>
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
@endsection