@extends('layouts.app')

@section('content')
<section class="container">
  <h2 class="my-5">Crear nuevo post</h2>
  <form class="my-5" action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">Título principal del artículo.</label>
      <input type="text" class="form-control" id="title" placeholder="Título del articulo" name="article_title" value="{{ old('article_title') }}">
      @error('article_title')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="description">Pequeña descripción del artículo.</label>
      <input type="text" class="form-control" id="description" placeholder="Pequeña descripción que se visualizará debajo del título" name="article_description" value="{{ old('article_description') }}">
      @error('article_description')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="article-text">Contenido del artículo</label>
      <textarea class="form-control" id="article-text" rows="10" name="article_text"></textarea>
      @error('article_text')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="article-category">Categoría</label>
      <select name="category_id" id="article_category" class="form-control">
        <option value="">Elije una categoría</option>
        @foreach($categories as $category)
        <option 
          value="{{ $category->category_id }}"
          @if(old('category_id') == $category->category_id) selected @endif
        >
          {{ $category->category_name }}
        </option>
        @endforeach
      </select>
      @error('category_id')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="article-image">Imagen del artículo</label>
      <input type="file" class="form-control-file" id="article-image" name="article_image">
      @error('article_image')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="article-image-alt">Pie de imagen</label>
      <input type="text" class="form-control" id="article-image-alt" placeholder="Descripción de la imagen" name="article_image_alt">
    </div>
    <button class="btn btn-primary" type="submit">Crear post</button>
  </form>
</section>
@endsection