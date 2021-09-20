<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';
    
    public function articulos()
    {
        //Definimos la conexión inversa a partir de un retorno de tiene muchos para hacer la conexión inversa 
        return $this->hasMany('App\Models\Articulos');
    }
}
