<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Articulos extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $table = 'articulos';

    protected $fillable = ['nombre','descripcion','precio' , 'stock', 'oferta','fecha_vnc'];


    public function categorias()
    {
        return $this->belongsTo(Categorias::class, 'categoria_id', '_id');
        #return $this->belongsTo(Categorias::class, 'categoria_id', '_id');
    }



    public function carrito()
    {
        #hasmMany por que un articulo puede star en muchos carritos
        return $this->hasMany(Carrito::class, 'articulo_id', '_id');
    }



}
