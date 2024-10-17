@extends('layouts.app') <!-- Cambia 'layout' por 'layouts.app' -->
@section('content')
<div class="container">
    <h2>Nueva Empresa</h2>
    <form action="{{ route('empresas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="form-group">
            <label for="nit">NIT:</label>
            <input type="text" class="form-control" id="nit" name="nit">
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
