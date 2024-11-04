@extends('layouts.app')

@section('title', 'Productos') 

@section('content')
    <div class="container">
        <h1 class="mb-4">Productos</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <th scope="row">{{ $producto->id }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
