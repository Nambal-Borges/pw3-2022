<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

    use HasFactory;
    protected $fillable = [
      'nome'
    ];



    //função para mostrar subcategorias na categoria selecionadas
    public function subcategoria(){
        return $this->hasMany(Subcategoria::class);
    }
}
