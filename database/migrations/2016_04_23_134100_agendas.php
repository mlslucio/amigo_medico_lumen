<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Agendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
       Schema::create('agendas', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('data_emissao');
            $table->string('dia_semana');
            $table->integer('saldo');
            $table->integer('quantidade');
            $table->integer('saldo_empenhado');
            $table->integer('clinica_id');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $Schema::drop('agendas');
    }
}
