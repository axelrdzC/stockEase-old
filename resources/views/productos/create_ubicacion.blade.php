@extends('layouts.app')

@section('title', 'Agregar producto')

@section('content')
<div class="container">
    <div class="text-center pt-2">
        <small class="text-muted" style="font-size: 0.9rem;">Agregar Producto</small>
        <h2 class="fw-bold">UBICACION Y CANTIDAD</h2>
    </div>
    <div class="d-flex justify-content-center vh-100">
        <div class="row w-75 p-4">
            <div class="col-md-4 bg-transparent">
                <!-- Lista de pasos -->
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-transparent">
                        <div class="small">Paso 1</div>
                        <div>INFORMACION GENERAL</div>
                    </li>
                    <li class="list-group-item bg-transparent">
                        <div class="small">Paso 2</div>
                        <div>INFORMACION MONETARIA</div>
                    </li>
                    <li class="list-group-item bg-white fw-bold rounded">
                        <div class="small">Paso 3</div>
                        <div>UBICACION Y CANTIDAD</div>
                    </li>
                </ul>
            </div>
            <div class="col-md-8">
                <!-- Formulario centrado -->
                <form method="POST" style="background-color: #f8f9fa;" class="shadow-lg p-4 rounded" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Cantidad total:</label>
                        <input type="number" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    
                    <!-- Contenedor para ubicaciones y cantidades -->
                    <div id="ubicaciones-container">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="tipo" class="form-label">Ubicación</label>
                                <select class="form-select" name="ubicacion[]" required>
                                    <option selected disabled>Selecciona un almacén</option>
                                    <option value="almacen_principal">ALMACEN PRINCIPAL</option>
                                    <option value="warehouse">WAREHOUSE</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="cantidad" class="form-label">Cantidad</label>
                                <input type="number" class="form-control" name="cantidad[]" required>
                            </div>
                        </div>
                    </div>

                    <!-- Enlace para agregar más ubicaciones -->
                    <a href="#" id="agregar-ubicacion" class="fw-bold enlace">+ Agregar otra ubicación</a>

                    <div class="d-flex justify-content-between mt-3">
                        <button type="button" class="btn btn-light me-2 flex-fill">Regresar</button>
                        <button type="submit" class="btn btn-primary flex-fill">Siguiente</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script>
    // Agregar un evento de clic al enlace
    document.getElementById('agregar-ubicacion').addEventListener('click', function(e) {
        e.preventDefault(); // Prevenir el comportamiento predeterminado del enlace

        // Clonar la fila de ubicación y cantidad
        const container = document.getElementById('ubicaciones-container');
        const newRow = document.createElement('div');
        newRow.classList.add('row', 'mb-3');
        newRow.innerHTML = `
            <div class="col-md-6">
                <label for="tipo" class="form-label">Ubicación</label>
                <select class="form-select" name="ubicacion[]" required>
                    <option selected disabled>Selecciona un almacén</option>
                    <option value="almacen_principal">ALMACEN PRINCIPAL</option>
                    <option value="warehouse">WAREHOUSE</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" class="form-control" name="cantidad[]" required>
            </div>
        `;
        container.appendChild(newRow); // Agregar la nueva fila al contenedor
    });
</script>
@endsection
@endsection
