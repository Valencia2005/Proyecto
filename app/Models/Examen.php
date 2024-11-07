<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;

    // Si el nombre de la tabla en la base de datos no es "examenes", lo puedes especificar aquí
    protected $table = 'examenes'; // Cambia 'examenes' si tu tabla tiene otro nombre
}
