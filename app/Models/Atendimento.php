<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    use HasFactory;
    protected $table = 'atendimentos';
    protected $fillable = ['loja_id','dia','horario'];

    public function lojas(){
        return $this->belongsTo(Loja::class);
    }
}
