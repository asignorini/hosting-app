@extends('layouts.admin')

@section('content')
<section>
  <h2 class="my-5">Crear nuevo post</h2>

  <form class="my-5" action="{{ route('admin.posts.store') }}" method="post">
    @csrf
    <div class="form-group">
      <label for="title">Título principal del artículo.</label>
      <input type="text" class="form-control" id="title" placeholder="Título del articulo" name="title">
    </div>
    <div class="form-group">
      <label for="description">Pequeña descripción del artículo.</label>
      <input type="text" class="form-control" id="description" placeholder="Pequeña descripción que se visualizará debajo del título" name="description">
    </div>
    <div class="form-group">
      <label for="article-text">Contenido del artículo</label>
      <textarea class="form-control" id="article-text" rows="10" placeholder="Escribe aquí el contenido del articulo nuevo..." name="article-text"></textarea>
    </div>
    <div class="form-group">
      <label for="article-image">Imagen del artículo</label>
      <input type="file" class="form-control-file" id="article-image">
    </div>
    <div class="form-group">
      <label for="article-image-alt">Pie de imagen</label>
      <input type="text" class="form-control" id="article-image-alt" placeholder="Descripción de la imagen">
    </div>
    <button class="btn btn-primary" type="submit">Crear post</button>
  </form>
</section>
@endsection