@extends('layouts.app')

@section('title', 'Productos') 

@section('content')
<div class="row align-items-center pb-3">
    <div class="col-sm-3 col-lg-3">
        <div class="fs-2 fw-semibold">Dashboard</div>
    </div>
    <!-- /.col-->
    <div class="col-6 ms-auto">
        <div class="d-flex align-items-center">
            <div class="input-group me-3">
                <input class="form-control p-1 px-2" type="search" placeholder="Busca un producto" aria-label="Search">
                <button class="btn btn-outline-primary p-1 px-2" type="button">
                    <i class="bi bi-search"></i>
                </button>
            </div>
            <button type="button" onclick="window.location.href='{{ route('productos.create') }}'" class="btn btn-primary text-nowrap p-1 px-2 fw-medium">Agregar producto +</button>
        </div>
    </div>
    <!-- /.col-->
</div>
<!-- /.row-->

<div class="container mt-4">
    <div class="row">
        <!-- Filtros -->
        <div class="col-md-2 me-5" style="padding:0;">
            <div class="p-3 border rounded bg-light">
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
                    <label for="filterCategory" class="form-label fs-6">CATEGORIA</label>
                    <select id="filterCategory" class="form-select">
                        <option selected>Seleccionar</option>
                        <option value="1">TODOS</option>
                        <option value="2">VINILOS</option>
                        <option value="2">GALLETAS</option>
                        <option value="2">ROPA</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="filterPrice" class="form-label">PRECIO</label>
                    <select id="filterPrice" class="form-select">
                        <option selected>Seleccionar</option>
                        <option value="1">$0 - $50</option>
                        <option value="2">$50 - $100</option>
                        <option value="3">$100 - $200</option>
                    </select>
                </div>

                <!-- Filtro por Stock -->
                <div class="mb-3">
                    <label for="filterStock" class="form-label">ESTADO DE STOCK</label>
                    <select id="filterStock" class="form-select">
                        <option selected>Seleccionar</option>
                        <option value="1">EN STOCK</option>
                        <option value="1">NIVEL BAJO DE STOCK</option>
                        <option value="2">AGOTADO</option>
                    </select>
                </div>
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
                    @foreach ($productos as $producto)
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
