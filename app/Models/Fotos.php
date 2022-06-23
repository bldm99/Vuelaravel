<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
#use Illuminate\Database\Eloquent\Model;
#use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Fotos extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $table = 'fotos';
    protected $fillable = [
        'numero', 'nombre','imagen'
    ];
}
