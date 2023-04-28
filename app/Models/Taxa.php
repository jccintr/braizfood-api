<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taxa extends Model
{
    use HasFactory;
    protected $table = 'taxas';
    protected $fillable = ['loja_id','bairro','valor'];

    public function lojas(){
        return $this->belongsTo(Loja::class);
    }
}
