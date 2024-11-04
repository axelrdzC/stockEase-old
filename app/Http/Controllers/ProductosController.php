<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = Producto::latest()->paginate(10);
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function createMonetaria(Request $request)
    {
        // Aquí puedes validar y guardar los datos de la vista anterior
        return view('productos.create_monetaria');
    }

    public function createUbicacion(Request $request)
    {
        // Aquí puedes validar y guardar los datos de la vista anterior
        return view('productos.create_ubicacion');
    }
    
}



