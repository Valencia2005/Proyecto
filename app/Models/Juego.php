<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    use HasFactory;

    // Aquí puedes definir los campos que quieres que sean asignables masivamente
    protected $fillable = ['nombre', 'descripcion']; // ajusta según los campos de tu tabla
}
