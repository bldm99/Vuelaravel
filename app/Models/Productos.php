<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
#use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Productos extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $table = 'productos';
    protected $fillable = [
        'nombre', 'categoria','descripcion','precio','stock','oferta','fecha_vnc'
    ];
}
