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
       
//=================================================================
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
//=================================================================

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
//=================================================================
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
//=================================================================
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
//=================================================================
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
//=================================================================
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
//=================================================================
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
//=================================================================
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
//=================================================================
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
//=================================================================
       $lastLojaId = DB::table('lojas')->insertGetid([
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
        // loop para inserir pagamentos, taxas e atendimentos
        for ($i=1;$i<=$lastLojaId;$i++){

           // insere as taxas de entrega
        DB::table('taxas')->insert([
            'loja_id' => $i,
            'bairro' => 'Centro',
            'valor' => 3.00,
        ]);
        DB::table('taxas')->insert([
            'loja_id' => $i,
            'bairro' => 'Varginha',
            'valor' => 3.50,
        ]);
        DB::table('taxas')->insert([
            'loja_id' => $i,
            'bairro' => 'Medicina',
            'valor' => 3.00,
        ]);
        DB::table('taxas')->insert([
            'loja_id' => $i,
            'bairro' => 'Santa rosa',
            'valor' => 6.00,
        ]);
        DB::table('taxas')->insert([
            'loja_id' => $i,
            'bairro' => 'Rebourgeon',
            'valor' => 8.00,
        ]);
        //insere as formas de pagamento
        DB::table('pagamentos')->insert([
            'loja_id' => $i,
            'nome' => 'Dinheiro',
        ]);
        DB::table('pagamentos')->insert([
            'loja_id' => $i,
            'nome' => 'Pix',
        ]);
        DB::table('pagamentos')->insert([
            'loja_id' => $i,
            'nome' => 'Cartão de Débito',
        ]);
        DB::table('pagamentos')->insert([
            'loja_id' => $i,
            'nome' => 'Cartão de Crédito',
        ]);
        DB::table('pagamentos')->insert([
            'loja_id' => $i,
            'nome' => 'PicPay',
        ]);
        // insere os horarios de atendimento
        DB::table('atendimentos')->insert([
            'loja_id' => $i,
            'dia' => 0,
            'horario' => '13h as 23h'
        ]);
        DB::table('atendimentos')->insert([
            'loja_id' => $i,
            'dia' => 1,
            'horario' => 'Fechado'
        ]);
        DB::table('atendimentos')->insert([
            'loja_id' => $i,
            'dia' => 2,
            'horario' => '18h as 23h'
        ]);
        DB::table('atendimentos')->insert([
            'loja_id' => $i,
            'dia' => 3,
            'horario' => '18h as 23h'
        ]);
        DB::table('atendimentos')->insert([
            'loja_id' => $i,
            'dia' => 4,
            'horario' => '16h as 23h'
        ]);
        DB::table('atendimentos')->insert([
            'loja_id' => $i,
            'dia' => 5,
            'horario' => '14h as 22h'
        ]);
        DB::table('atendimentos')->insert([
            'loja_id' => $i,
            'dia' => 6,
            'horario' => '18h as 24h'
        ]);
        DB::table('atendimentos')->insert([
            'loja_id' => $i,
            'dia' => 7,
            'horario' => '18h as 24h'
        ]);



        }
    }
}

