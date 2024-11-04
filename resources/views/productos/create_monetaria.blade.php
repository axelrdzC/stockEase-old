@extends('layouts.app')

@section('title', 'Agregar producto - Información Monetaria')

@section('content')
<div class="container">
    <div class="text-center pt-2">
        <small class="text-muted" style="font-size: 0.9rem;">Agregar Producto</small>
        <h2 class="fw-bold">INFORMACION MONETARIA</h2>
    </div>
    <div class="d-flex justify-content-center vh-100">
        <div class="row w-75 p-4">
            <div class="col-md-4 bg-transparent">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-transparent">Paso 1: INFORMACION GENERAL</li>
                    <li class="list-group-item bg-white fw-bold rounded">Paso 2: INFORMACION MONETARIA</li>
                    <li class="list-group-item bg-transparent">Paso 3: UBICACION Y CANTIDAD</li>
                </ul>
            </div>
            <div class="col-md-8">
            <form method="POST" action="{{ route('productos.create.ubicacion') }}" style="background-color: #f8f9fa;" class="shadow-lg p-4 rounded">
                    @csrf
                    <!-- Campo de precio de compra y moneda -->
                    <div class="mb-3">
                        <label for="precio_compra" class="form-label">Precio de compra</label>
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <input type="number" class="form-control w-75" id="precio_compra" name="precio_compra" required placeholder="Precio">
                                    <select class="form-select" id="moneda_compra" name="moneda_compra" required>
                                        <option selected disabled>$</option>
                                        <option value="USD">USD</option>
                                        <option value="EUR">EUR</option>
                                        <option value="MXN">MXN</option>
                                        <option value="JPY">JPY</option>
                                        <!-- Añade más monedas según sea necesario -->
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Campos de precio de venta y precio de venta al mayoreo -->
                    <div class="row mb-3">
                        <!-- Precio de venta -->
                        <div class="col-md-6">
                            <label for="precio_venta" class="form-label">Precio de venta</label>
                            <div class="input-group">
                                <input type="number" class="form-control w-50" id="precio_venta" name="precio_venta" required placeholder="Precio">
                                <select class="form-select" id="moneda_venta" name="moneda_venta" required>
                                    <option selected disabled>$</option>
                                    <option value="USD">USD</option>
                                    <option value="EUR">EUR</option>
                                    <option value="MXN">MXN</option>
                                    <option value="JPY">JPY</option>
                                    <!-- Añade más monedas según sea necesario -->
                                </select>
                            </div>
                        </div>

                        <!-- Precio de venta al mayoreo -->
                        <div class="col-md-6">
                            <label for="precio_venta_mayoreo" class="form-label">Precio de venta al por mayor</label>
                            <div class="input-group">
                                <input type="number" class="form-control w-50" id="precio_venta_mayoreo" name="precio_venta_mayoreo" required placeholder="Precio">
                                <select class="form-select" id="moneda_venta_mayoreo" name="moneda_venta_mayoreo" required>
                                    <option selected disabled>$</option>
                                    <option value="USD">USD</option>
                                    <option value="EUR">EUR</option>
                                    <option value="MXN">MXN</option>
                                    <option value="JPY">JPY</option>
                                    <!-- Añade más monedas según sea necesario -->
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Botones para regresar y siguiente -->
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-light me-2 flex-fill">Anterior</button>
                        <button type="submit" class="btn btn-primary flex-fill">Siguiente</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
