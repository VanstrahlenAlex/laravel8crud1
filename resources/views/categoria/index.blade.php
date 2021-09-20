@extends('layouts.plantillabase');

@section('contenido')
<h1 class="text-center"> Categoria</h1>
<a href="categoria/create" class="btn btn-success">Añadir categoria</a>
<a href="articulos" class="btn btn-dark">Regresar</a>
<table  class="table table-info table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Categoria</th>
            <th scope="col">descripcion</th>
            <th scope="col">Acciones</th>

        </tr>
    </thead>
    {{-- {{$categorias}} --}}
    <tbody>
        @foreach ($categorias as $categoria)
            <tr>
                <td>{{$categoria->id}}</td>
                <td>{{$categoria->categoria}}</td>
                <td>{{$categoria->descripcion}}</td>
                <td>
                    <form action="{{route('categoria.destroy', $categoria->id)}}" method="POST">
                        <a href="/categoria/{{$categoria->id}}/edit" class="btn btn-info">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection 