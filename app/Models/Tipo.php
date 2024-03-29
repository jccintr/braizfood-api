<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;
    protected $fillable = ['nome','imagem'];
    protected $table = 'tipos';

    public function lojas(){
        return $this->hasmany(Loja::class);
    }
}
