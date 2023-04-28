<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    use HasFactory;
    protected $table = 'lojas';


    public function tipos(){
        return $this->belongsTo(Tipo::class);
    }

    public function cidades(){
        return $this->belongsTo(Cidade::class);
    }

    public function taxas(){
        return $this->hasMany(Taxas::class);
    }

    public function pagamentos(){
        return $this->hasMany(Pagamento::class);
    }

    public function atendimentos(){
        return $this->hasmany(Atendimento::class);
    }
}
