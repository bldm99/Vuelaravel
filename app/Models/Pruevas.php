<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
#use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Pruevas extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $table = 'prueva';
    protected $fillable = [
        'nombre', 'apellido','sexo','edad'
    ];
}
