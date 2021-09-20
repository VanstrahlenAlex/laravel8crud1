@extends('layouts.plantillabase');

@section('contenido')
<h1>Añadir categoria</h1>

<form action="/categoria/{{$categoria->id}}" method="POST">
    @method('PUT')
    @csrf 
    <div class="mb-3">
        <label for="" class="form-label">Categoría</label>
        <input id="categoria" name="categoria" type="text" class="form-control" value="{{$categoria->categoria}}" tabindex="1">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$categoria->descripcion}}" tabindex="2">
    </div>

    <a href="/categoria" class="btn btn-danger" tabindex="3">Cancelar</a>
<button type="submit" class="btn btn-success" tabindex="4">Guardar</button>
</form>
@endsection