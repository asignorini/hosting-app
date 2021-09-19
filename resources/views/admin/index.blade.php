@extends('layouts.admin')

@section('content')
<h2 class="mt-5 mb-3">Publicaciones del blog</h2>

<a href="{{ route('admin.posts.create') }}" class="btn btn-primary my-3">Crear nuevo post</a>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Título</th>
            <th scope="col">Autor</th>
            <th scope="col">Fecha</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
        <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article->user_id}}</td>
            <td>{{$article->created_at}}</td>
            <td>
                <div class="btn btn-primary">Editar</div>
                <div class="btn btn-danger">Borrar</div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection