<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;
    protected $table = 'tb_pais'; //indicamos la tabla de referencia
    protected $primaryKey = 'pais_codi'; //indicamos la columna de la llave primaria
    public $timestamps = false; //quitar columnas de fecha y registro created_at y updated_at.
    protected $keyType = "string"; //convertir el tipo de dato
}
