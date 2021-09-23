<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesmovementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulo_movimientos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('id_mov')->unique();

            $table->foreign('id_mov')
            ->references('id')
            ->on('movimientos')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->integer('id_producto');
            $table->integer('cantidad');
            $table->decimal('valor');
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
        Schema::dropIfExists('articlesmovement');
    }
}
