<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosHasProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos_has_productos', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('pedidos_idpedidos')->unsigned();
            // $table->foreign('pedidos_idpedidos')->references('idpedidos')->on('pedidos');

            // $table->bigInteger('productos_idproductos')->unsigned();
            // $table->foreign('productos_idproductos')->references('idproductos')->on('productos');
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
        Schema::dropIfExists('pedidos_has_productos');
    }
}
