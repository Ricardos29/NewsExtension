@extends('welcome')

@section('content')
<div class="container mt-5 mb-5">
    @if($tags)
        <table class="table table-bordered" style="table-layout: fixed;">
            <thead class="table-dark">
                <tr class="text-center">
                    <th scope="col" class="col-sm-3">Titulo</th>
                    <th scope="col" class="col-sm-3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($tags as $tag)
                    <tr class="text-center">
                        <td>{{ $tag->title }}</td>
                        <td>
                            <a href="{{ route('tag.edit', ['tag' => $tag->id]) }}" class="btn btn-primary" >Editar</a> 
                            <a href="{{ route('tag.edit', ['tag' => $tag->id]) }}" class="btn btn-danger" >Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h2>Não existem tags publicadas</h2>
        <h3>Clique aqui para criar um.  <a href="{{ route('tag.create') }}" class="btn btn-success" >Criar Tag</a></h3>
     @endif
</div>
@endsection