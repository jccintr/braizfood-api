<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lojas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipo_id');
            $table->unsignedBigInteger('cidade_id');
            $table->boolean('ativo')->default(true);
            $table->boolean('aberto')->default(false);
            $table->string('nome');
            $table->string('ramo_atividade');
            $table->string('logotipo')->nullable();
            $table->string('cor_fundo')->nullable();
            $table->string('cor_texto')->nullable();
            $table->string('cover')->nullable();
            $table->string('telefone')->nullable();
            $table->string('endereco')->nullable();
            $table->string('bairro')->nullable();
            $table->string('email')->nullable();
            $table->string('contato')->nullable();
            $table->float('stars')->default(4.5);
            $table->string('tempo')->nullable();
            $table->timestamps();
            // cria o relacionamento com a tabela tipos
            $table->foreign('tipo_id')->references('id')->on('tipos');
            // cria o relacionamento com a tabela cidades
            $table->foreign('cidade_id')->references('id')->on('cidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lojas');
    }
};
