@extends('welcome')

@section('content')
<div class="container mt-5 mb-5">
    @if($posts)
        <table class="table table-bordered" style="table-layout: fixed;">
            <thead class="table-dark">
                <tr class="text-center">
                    <th scope="col" class="col-sm-2">Titulo</th>
                    <th scope="col" class="col-md-4">Descrição</th>
                    <th scope="col" class="col-md-2">Tags</th>
                    <th scope="col" class="col-md-2">Categorias</th>
                    <th scope="col" class="col-sm-2"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr class="text-center">
                        <td>{{ $post->title }}</td>
                        <td class="text-wrap">{{ $post->body }}</td>
                        <td>
                            @foreach($post->tags as $tag)
                                <a class="btn" style="background-color: {{ $tag->color }}; color: white;">{{ $tag->title }}</a> 
                            @endforeach    
                        </td>
                        <td>
                            @foreach($post->categories as $category)
                                <a class="btn btn-secondary">{{ $category->title }}</a> 
                            @endforeach    
                        </td>
                        <td>
                            <a href="{{ route('post.edit', ['post' => $post->id]) }}" class="btn btn-primary" >Editar</a> 
                            <a href="{{ route('post.edit', ['post' => $post->id]) }}" class="btn btn-danger" >Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h2>Não existem artigos publicados</h2>
        <h3>Clique aqui para criar um.  <a href="{{ route('post.create') }}" class="btn btn-success" >Criar Artigo</a></h3>
     @endif
</div>
@endsection