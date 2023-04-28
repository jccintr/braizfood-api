<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;
    protected $fillable = ['nome','estado','imagem'];
    protected $table = 'cidades';

    public function lojas(){
        return $this->hasmany(Loja::class);
    }
}
