<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nomeCompleto', 100);
            $table->char('CPF', 11)->unique();
            $table->char('RG', 9)->unique();
            $table->string('email', 100)->unique();
            $table->string('senha', 200);
            $table->string('telefone', 50);
            $table->integer('CEP', 8);
            $table->string('endNum', 11);
            $table->string('endComp', 200);
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
        Schema::dropIfExists('usuarios');
    }
}
