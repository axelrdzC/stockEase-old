@extends('layouts.app')

@section('title', 'Agregar producto')

@section('content')
<div class="container">
    <div class="text-center pt-2">
        <small class="text-muted" style="font-size: 0.9rem;">Agregar Producto</small>
        <h2 class="fw-bold">INFROMACION GENERAL</h2>
    </div>
    <div class="d-flex justify-content-center vh-100">
        <div class="row w-75 p-4">
            <div class="col-md-4 bg-transparent">
                <!-- Lista de pasos -->
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-white fw-bold rounded">
                        <div class="small">Paso 1</div>
                        <div>INFORMACION GENERAL</div>
                    </li>
                    <li class="list-group-item bg-transparent">
                        <div class="small">Paso 2</div>
                        <div>INFORMACION MONETARIA</div>
                    </li>
                    <li class="list-group-item bg-transparent">
                        <div class="small">Paso 3</div>
                        <div>UBICACION Y CANTIDAD</div>
                    </li>
                </ul>
            </div>
            <div class="col-md-8">
                <!-- Formulario centrado -->
                <form method="POST" action="{{ route('productos.create.monetaria') }}" style="background-color: #f8f9fa;" class="shadow-lg p-4 rounded" enctype="multipart/form-data">
                    @csrf
                    <!-- Nombre del producto -->
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del producto</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>

                    <!-- Fila con Tipo de producto y Categoría -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="tipo" class="form-label">Tipo de producto</label>
                            <select class="form-select" id="tipo" name="tipo" required>
                                <option selected disabled>Selecciona un tipo</option>
                                <option value="tipo1">Tipo 1</option>
                                <option value="tipo2">Tipo 2</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="categoria" class="form-label">Categoría</label>
                            <select class="form-select" id="categoria" name="categoria" required>
                                <option selected disabled>Selecciona una categoría</option>
                                <option value="categoria1">Categoría 1</option>
                                <option value="categoria2">Categoría 2</option>
                            </select>
                        </div>
                    </div>

                    <!-- Fila con Código SKU y Código de barras -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="sku" class="form-label">Código SKU</label>
                            <input type="text" class="form-control" id="sku" name="sku" required>
                        </div>
                        <div class="col-md-6">
                            <label for="codigo_barras" class="form-label">Código de barras</label>
                            <input type="text" class="form-control" id="codigo_barras" name="codigo_barras" required>
                        </div>
                    </div>

                    <!-- Descripción -->
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                    </div>

                    <!-- Subir Imagen -->
                    <div class="mb-3">
                        <label for="imagen" class="form-label">Subir imagen</label>
                        <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*">
                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-light me-2 flex-fill">Regresar</button>
                        <button type="submit" class="btn btn-primary flex-fill">Siguiente</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
