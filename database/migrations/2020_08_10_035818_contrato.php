<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contrato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('contrato', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email_contrato');
            $table->string('cnpj');
            $table->string('inuser');
            $table->string('razaosocial');
            $table->string('nomefantasia');
            $table->string('integracao');
            $table->string('inkey');
            $table->string('email_unidade');
            $table->string('municipio');
            $table->enum('tipo', ['0', '1','2','3']);
            $table->enum('status_contrato', ['0', '1']);
            $table->enum('status_unidade', ['0', '1']);
            $table->string('paciente');
            $table->string('acompanhante');
            $table->string('obito');
            $table->string('cpf');
            $table->string('nome');
            $table->rememberToken();
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
        //
        Schema::dropIfExists('contrato');
    }
}
