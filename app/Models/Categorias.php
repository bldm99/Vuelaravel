<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Categorias extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $table = 'categorias';

    protected $fillable = ['nombre'];


    public function articulos()
    {
        #hasmMany por que una categoria tiene varios articulo
        return $this->hasMany(Articulos::class, 'categoria_id', '_id');
    }
}
