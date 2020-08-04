<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            //$table->dateTime('created_at', 0);
            //primary key from the "users" table
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            //chave primária da tabela de produtos
            $table->unsignedBigInteger('id_produto'); 
            $table->foreign('id_produto')->references('id')->on('produtos');
            $table->string('status', 15);
            $table->decimal('total', 8,2);
            $table->string('pagStatus', 20);
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
        Schema::dropIfExists('pedidos');
    }
}
