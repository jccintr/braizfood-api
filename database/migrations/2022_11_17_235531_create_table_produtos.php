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


        Schema::create('produto_categoria', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tenant_id');
            $table->string('nome');
            $table->string('imagem')->nullable();
            $table->timestamps();
            // cria o relacionamento com a tabela tenants
            $table->foreign('tenant_id')->references('id')->on('tenants');
        });




        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tenant_id');
            $table->unsignedBigInteger('categoria_id');
            $table->string('nome');
            $table->string('imagem')->nullable();
            $table->boolean('disponivel')->default(false);
            $table->boolean('promocao')->default(false);
            $table->integer('preco')->default(0);
            $table->integer('preco_promocao')->default(0);
            $table->timestamps();
             // cria o relacionamento com a tabela tenants
             $table->foreign('tenant_id')->references('id')->on('tenants');
              // cria o relacionamento com a tabela produto categoria
            $table->foreign('categoria_id')->references('id')->on('produto_categoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_categoria');
    }
};
