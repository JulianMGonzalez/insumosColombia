<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('codigo_producto')->unique();
            
            $table->unsignedInteger('id_linea');
            $table->unsignedInteger('id_sublinea');

            $table->foreign('id_linea')->references('codigo')->on('lineas');
            $table->foreign('id_sublinea')->references('codigo')->on('sublineas');

            $table->text('descripcion');
            $table->decimal('costo_ultimo')->nullable();
            $table->smallInteger('stock');
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
        Schema::dropIfExists('productos');
    }
}
