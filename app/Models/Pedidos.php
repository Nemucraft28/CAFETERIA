<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;

    protected $table = 'pedidos';

    // Nombre de la columna que sirve como clave primaria (por defecto es "id")
    protected $primaryKey = 'id';

    protected $fillable = ['mesa', 'estado', 'forma_pago', 'total'];

}
