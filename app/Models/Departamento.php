<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    protected $table = 'tb_departamento'; //indicamos la tabla de referencia
    protected $primaryKey = 'depa_codi'; //indicamos la columna de la llave primaria
    public $timestamps = false; //quitar columnas de fecha y registro created_at y updated_at.
}
