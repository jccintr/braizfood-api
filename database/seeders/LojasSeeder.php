<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LojasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lojas')->insert([
            'tipo_id' => 1,
            'cidade_id' => 1,
            'ativo' => true,
            'aberto' => true,
            'nome' => "Burger King",
            'ramo_atividade' => 'Restaurante',
            'cor_fundo' => '#ff0000',
            'cor_texto' => '#000000',
            'logotipo' => "imagens/lojas/logotipos/bk.png",
            'cover' => "imagens/lojas/covers/bk.png",
            'tempo' => '30-40min', 
        ]);

        DB::table('lojas')->insert([
            'tipo_id' => 1,
            'cidade_id' => 1,
            'ativo' => true,
            'aberto' => true,
            'nome' => "McDonalds",
            'ramo_atividade' => 'Restaurante',
            'cor_fundo' => '#ff0000',
            'cor_texto' => '#000000',
            'logotipo' => "imagens/lojas/logotipos/mcdonalds.png",
            'cover' => "imagens/lojas/covers/mcdonalds.png",
            'tempo' => '40-60min', 
        ]);

        DB::table('lojas')->insert([
            'tipo_id' => 1,
            'cidade_id' => 1,
            'ativo' => true,
            'aberto' => true,
            'nome' => "Lanchonete Paladar",
            'ramo_atividade' => 'Lanchonete',
            'cor_fundo' => '#ff0000',
            'cor_texto' => '#000000',
            'logotipo' => "imagens/lojas/logotipos/paladar.png",
            'tempo' => '15-30min', 
        ]);

        DB::table('lojas')->insert([
            'tipo_id' => 1,
            'cidade_id' => 1,
            'ativo' => true,
            'aberto' => true,
            'nome' => "Pastelaria do Teko",
            'ramo_atividade' => 'Pastelaria',
            'cor_fundo' => '#ff0000',
            'cor_texto' => '#000000',
            'logotipo' => "imagens/lojas/logotipos/pastelaria-do-teko.jpg",
            'cover' => "imagens/lojas/covers/pastel.png",
            'tempo' => '10-20min', 
        ]);

        DB::table('lojas')->insert([
            'tipo_id' => 1,
            'cidade_id' => 1,
            'ativo' => true,
            'aberto' => true,
            'nome' => "Chicken Premium",
            'ramo_atividade' => 'Restaurante',
            'cor_fundo' => '#ff0000',
            'cor_texto' => '#000000',
            'logotipo' => "imagens/lojas/logotipos/chicken.png",
            'cover' => "imagens/lojas/covers/frango.png",
            'tempo' => '15-30min', 
        ]);

        DB::table('lojas')->insert([
            'tipo_id' => 1,
            'cidade_id' => 1,
            'ativo' => true,
            'aberto' => false,
            'nome' => "Adega Piloto",
            'ramo_atividade' => 'Bebidas',
            'cor_fundo' => '#ff0000',
            'cor_texto' => '#000000',
            'logotipo' => "imagens/lojas/logotipos/adega-piloto.png",
            'tempo' => '15-30min', 
        ]);

        DB::table('lojas')->insert([
            'tipo_id' => 1,
            'cidade_id' => 1,
            'ativo' => true,
            'aberto' => true,
            'nome' => "Mundo Burguer",
            'ramo_atividade' => 'Hamburgueria',
            'cor_fundo' => '#ff0000',
            'cor_texto' => '#000000',
            'logotipo' => "imagens/lojas/logotipos/mundo-burguer.png",
            'tempo' => '15-30min', 
        ]);

        DB::table('lojas')->insert([
            'tipo_id' => 1,
            'cidade_id' => 1,
            'ativo' => true,
            'aberto' => false,
            'nome' => "Pizza Delivery",
            'ramo_atividade' => 'Pizzaria',
            'cor_fundo' => '#ff0000',
            'cor_texto' => '#000000',
            'logotipo' => "imagens/lojas/logotipos/pizza-delivery.png",
            'cover' => "imagens/lojas/covers/pizza.png",
            'tempo' => '15-30min', 
        ]);

        DB::table('lojas')->insert([
            'tipo_id' => 1,
            'cidade_id' => 1,
            'ativo' => true,
            'aberto' => true,
            'nome' => "Burger Shop",
            'ramo_atividade' => 'Hamburgueria',
            'cor_fundo' => '#ff0000',
            'cor_texto' => '#000000',
            'logotipo' => "imagens/lojas/logotipos/burger-shop.png",
            'cover' => "imagens/lojas/covers/burger3.png",
            'tempo' => '15-30min', 
        ]);

        DB::table('lojas')->insert([
            'tipo_id' => 1,
            'cidade_id' => 1,
            'ativo' => true,
            'aberto' => true,
            'nome' => "Big Burgers",
            'ramo_atividade' => 'Hamburgueria',
            'cor_fundo' => '#ff0000',
            'cor_texto' => '#000000',
            'logotipo' => "imagens/lojas/logotipos/big-burguers.png",
            'cover' => "imagens/lojas/covers/burger1.png",
            'tempo' => '15-30min', 
        ]);

        DB::table('lojas')->insert([
            'tipo_id' => 1,
            'cidade_id' => 1,
            'ativo' => true,
            'aberto' => false,
            'nome' => "Burger House",
            'ramo_atividade' => 'Hamburgueria',
            'cor_fundo' => '#ff0000',
            'cor_texto' => '#000000',
            'logotipo' => "imagens/lojas/logotipos/burger-house.png",
            'cover' => "imagens/lojas/covers/burger2.png",
            'tempo' => '15-30min', 
        ]);
    }
}

