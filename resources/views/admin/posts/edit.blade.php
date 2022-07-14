@extends('welcome')

@section('content')
<div class="container mt-5 mb-5">

    <div class="w-50 d-flex justify-center align-center flex-column" style="margin-right: auto; margin-left: auto">
        <h1 class="text-center mb-3">Editar Publicação</h1>
        <form action="{{ route('post.update', ['post' => $post]) }}" method="post">
            @csrf
            <div class="input-group mb-3">
                <input id="title" name="title" type="text" class="form-control" placeholder="Titulo da Publicação" aria-label="Username" 
                    aria-describedby="basic-addon1" value="{{ $post->title }}">
            </div>

            <div class="input-group">
                <textarea id="description" name="description" class="form-control" aria-label="With textarea"
                    placeholder="Conteúdo da Publicação" rows="10" style="resize: none;">{{ $post->body }}</textarea>
            </div>

            <button type="submit" class="btn btn-success mt-3">Gravar</button>
            <a href="{{ route('post.list') }}" class="btn btn-danger mt-3">Cancelar</a>

        </form>
    </div>

</div>
@endsection