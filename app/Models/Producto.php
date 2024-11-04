<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{
    use HasFactory;

    // Especifica los campos que se pueden asignar masivamente
    protected $fillable = ['nombre', 'descripcion', 'precio', 'cantidad'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}

