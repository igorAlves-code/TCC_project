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
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('userId')->constrained('users') ->onUpdate('cascade')->onDelete('cascade');
            $table->string('title');
            $table->string("recurso")->nullable();
            $table->string("ambiente")->nullable();
            $table->date("start");
            $table->integer("retirada");
            $table->integer("devolucao");
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
        Schema::dropIfExists('agendamentos');
    }
};
