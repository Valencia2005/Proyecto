<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;

    // Si tu tabla de base de datos se llama "temas", puedes dejarlo vacío,
    // pero si se llama diferente, usa la siguiente línea:
    // protected $table = 'temas';

    // Los campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre', // Añade los campos que necesitas aquí
    ];
}
