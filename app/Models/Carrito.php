<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Carrito extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $table = 'carrito';
    protected $fillable = ['articulo_id','usuario_id'];



    public function articulos()
    {

        return $this->belongsTo(Articulos::class, 'articulo_id', '_id');
        #return $this->belongsTo(Categorias::class, 'categoria_id', '_id');
    }

    public function usuarios()
    {
        return $this->belongsTo(User::class, 'usuario_id', '_id');
        #return $this->belongsTo(Categorias::class, 'categoria_id', '_id');
    }

}
