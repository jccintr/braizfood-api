<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos')->insert([
            'nome' => "Pizzarias",
            //'imagem' => "imagens/cidades/brasopolis.jpeg",
        ]);
        DB::table('tipos')->insert([
            'nome' => "Hamburguerias",
            //'imagem' => "imagens/cidades/brasopolis.jpeg",
        ]);
        DB::table('tipos')->insert([
            'nome' => "Lanchonetes",
            //'imagem' => "imagens/cidades/brasopolis.jpeg",
        ]);
        DB::table('tipos')->insert([
            'nome' => "Pastelarias",
            //'imagem' => "imagens/cidades/brasopolis.jpeg",
        ]);
        DB::table('tipos')->insert([
            'nome' => "Restaurantes",
            //'imagem' => "imagens/cidades/brasopolis.jpeg",
        ]);
        DB::table('tipos')->insert([
            'nome' => "Adegas",
            //'imagem' => "imagens/cidades/brasopolis.jpeg",
        ]);

    }
}
