<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;

    protected $table = 'articulos';
    public function categoria()
    {
        //un prodcuto pertenece a una categoria 
        return $this->belongsTo('App\Models\Categoria','categoria_id');
    }
}
