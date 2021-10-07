@extends('layouts.app')

@section('title', 'Administrador | Editar post')

@section('content')
<section class="container">
    <h2 class="my-5">Edicion del post: {{ $article->article_title }} </h2>

    <form class="my-5" action="{{ route('admin.posts.update', ['id' => $article->article_id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Título principal del artículo.</label>
            <input type="text" class="form-control" id="title" value=" {{ $article->article_title }} " name="article_title">
            @error('article_title')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Pequeña descripción del artículo.</label>
            <input type="text" class="form-control" id="description" value="{{ $article->article_description }}" name="article_description">
            @error('article_description')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="article-text">Contenido del artículo</label>
            <textarea class="form-control" id="article-text" rows="10" name="article_text">{{ $article->article_text }}</textarea>
            @error('article_text')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="article_category">Categoría</label>
            <select name="category_id" id="article_category" class="form-control">
                <option value="">Elije una categoría</option>
                @foreach($categories as $category)
                <option value="{{ $category->category_id }}" @if(old('category_id', $article->category_id) == $category->category_id) selected @endif
                    >
                    {{ $category->category_name }}
                </option>
                @endforeach
            </select>
            @error('category_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <p>Imagen actual:</p>
            @if($article->hasImage())
                <img src="{{ asset('/storage/img/' . $article->article_image) }}" alt="Imagen actual de {{ $article->article_title }}" class="img-fluid">
            @else
                <p>No tiene.</p>
            @endif
        </div>
        <div class="form-group">
            <label for="article-image">Cambiar imagen del articulo (opcional)</label>
            <input type="file" class="form-control-file" id="article-image" name="article_image">
            @error('article_image')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="article-image-alt">Pie de imagen</label>
            <input type="text" class="form-control" id="article-image-alt" placeholder="Descripción de la imagen" name="article_image_alt" value="{{ $article->article_image_alt }}">
        </div>
        <button class="btn btn-primary" type="submit">Editar post</button>
    </form>
</section>
@endsection