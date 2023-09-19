<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    protected $table = 'productos';

    // Nombre de la columna que sirve como clave primaria (por defecto es "id")
    protected $primaryKey = 'id';

    protected $fillable = ['nombre', 'referencia', 'precio', 'peso', 'categoria', 'stock'];

}
