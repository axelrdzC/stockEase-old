@extends('layouts.app')

@section('title', 'Agregar cliente')

@section('content')
<div class="container">
    <div class="text-center pt-2">
        <small class="text-muted" style="font-size: 0.9rem;">Agregar cliente</small>
        <h2 class="fw-bold">INFROMACION GENERAL</h2>
    </div>
    <div class="d-flex justify-content-center vh-100">
        <div class="row w-50 p-4 h-25">
                <!-- Formulario centrado -->
                <form method="GET" style="background-color: #f8f9fa;" class="shadow-lg p-4 h-auto rounded" enctype="multipart/form-data">
                    @csrf
                    <!-- Nombre del producto -->
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre del cliente</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>

                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo de cliente</label>
                        <select class="form-select" id="tipo" name="tipo" required>
                            <option selected disabled>Selecciona un tipo</option>
                            <option value="tipo1">Mayorista</option>
                            <option value="tipo2">Minorista</option>
                        </select>
                    </div>

                    <!-- correo -->
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <!-- tel -->
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Telefono</label>
                        <input type="number" class="form-control" id="tel" name="tel" required>
                    </div>

                    <!-- Subir Imagen -->
                    <div class="mb-3">
                        <label for="imagen" class="form-label">Subir imagen</label>
                        <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*">
                    </div>

                    <div class="d-flex justify-content-between mt-5">
                        <button type="button" class="btn btn-light me-2 flex-fill">Regresar</button>
                        <button type="submit" class="btn btn-primary flex-fill">Siguiente</button>
                    </div>
                </form>
        </div>
    </div>
</div>
@endsection
