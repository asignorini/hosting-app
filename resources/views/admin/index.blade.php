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
                <a href="{{ route('admin.posts.edit', ['id' => $article->id]) }}" class="btn btn-warning">Modificar</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModalCenter">
                    Eliminar
                </button>
                <!-- Modal -->
                <div class="modal fade" id="deleteModalCenter" tabindex="-1" role="dialog" aria-labelledby="deleteModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalCenterTitle">Eliminar artículo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Estás seguro de querer eliminar el post: <span class="font-weight-bold">{{ $article->title }}</span>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <form action="{{ route('admin.posts.destroy', ['id' => $article->id]) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" data-target="#deleteModalCenter">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection