@extends('welcome')

@section('content')
<div class="container mt-5 mb-5">
    @if($categories)
        <table class="table table-bordered" style="table-layout: fixed;">
            <thead class="table-dark">
                <tr class="text-center">
                    <th scope="col" class="col-sm-3">Titulo</th>
                    <th scope="col" class="col-sm-3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr class="text-center">
                        <td>{{ $category->title }}</td>
                        <td>
                            <a href="{{ route('category.edit', ['category' => $category->id]) }}" class="btn btn-primary" >Editar</a> 
                            <a href="{{ route('category.edit', ['category' => $category->id]) }}" class="btn btn-danger" >Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h2>Não existem categorias publicadas</h2>
        <h3>Clique aqui para criar um.  <a href="{{ route('category.create') }}" class="btn btn-success" >Criar Categoria</a></h3>
     @endif
</div>
@endsection