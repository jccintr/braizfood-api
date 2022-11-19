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
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('logotipo')->nullable();
            $table->string('cover')->nullable();
            $table->boolean('aberto')->default(false);
            $table->boolean('ativo')->default(false);
            $table->string('cor_fundo')->nullable();
            $table->string('cor_texto')->nullable();
            $table->string('endereco')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('contato')->nullable();
            $table->string('telefone')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('ie')->nullable();
            $table->unsignedBigInteger('categoria_id');
            // cria o relacionamento com a tabela tenant_categorias
            $table->foreign('categoria_id')->references('id')->on('tenant_categoria');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenants');
    }
};
