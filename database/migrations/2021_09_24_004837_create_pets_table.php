<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            
            // ['nome' , 'raca' , 'idade' , 'tipo' , 'cpf_tutor', 'nome_tutor'];

            $table->id();
            $table->string('nome' , 30);
            $table->string ('raca' , 30);
            $table->integer('idade');
            $table->string('tipo');
            $table->string('cpf_tutor');
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
        Schema::dropIfExists('pets');
    }
}
