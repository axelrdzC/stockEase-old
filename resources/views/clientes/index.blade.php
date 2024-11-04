@extends('layouts.app')

@section('title', 'Clientes') 

@section('content')
<div class="row align-items-center pb-3">
    <div class="col-sm-3 col-lg-3">
        <div class="fs-2 fw-semibold">Clientes</div>
    </div>
    <!-- /.col-->
    <div class="col-6 ms-auto">
        <div class="d-flex align-items-center">
            <div class="input-group me-3">
                <input class="form-control border-secondary p-1 px-2 bg-white" type="search" placeholder="Busca un cliente" aria-label="Search">
                <button class="btn border border-secondary p-1 px-2 bg-white" type="button">
                    <i class="bi bi-search"></i>
                </button>
            </div>
            <button type="button" onclick="window.location.href='{{ route('clientes.create') }}'" class="btn btn-primary text-nowrap p-1 px-2 fw-medium">Agregar cliente +</button>
        </div>
    </div>
    <!-- /.col-->
</div>
<!-- /.row-->

<div class="container mt-4">
    <div class="row">
        <!-- Filtros -->
        <div class="col-md-2 me-5" style="padding:0;">
            <div class="p-3 border rounded bg-white">
                <h5 class="mb-3">Filtros</h5>

                <div class="mb-3">
                    <label for="filterCategory" class="form-label fs-6">ORDENAR POR</label>
                    <select id="filterCategory" class="form-select">
                        <option selected>Seleccionar</option>
                        <option value="1">ALFABETICO: A-Z</option>
                        <option value="2">ALFABETICO: Z-A</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="filterCategory" class="form-label fs-6">TIPO</label>
                    <select id="filterCategory" class="form-select">
                        <option selected>Seleccionar</option>
                        <option value="1">MAYORISTA</option>
                        <option value="2">MINORISTA</option>
                        <option value="2">EMPRESA</option>
                    </select>
                </div>

                <button type="button" class="btn btn-primary text-nowrap p-1 px-2 fw-medium w-100 mt-2">Restablecer filtros</button>

            </div>
        </div>

        <!-- Tabla de Productos -->
        <div class="col-md-9">
            <table class="table table-striped">
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
                    @foreach ($clientes as $cliente)
                        <tr>
                            <th scope="row">{{ $producto->id }}</th>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->descripcion }}</td>
                            <td>{{ $producto->cantidad }}</td>
                            <td>{{ $producto->precio }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
