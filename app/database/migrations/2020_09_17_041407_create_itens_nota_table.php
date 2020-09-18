<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItensNotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens_nota', function (Blueprint $table) {
            $table->foreignId('produto_id');
            $table->foreignId('nota_id');
            $table->decimal('valor_unitario', 2);
            $table->decimal('valor_total', 2);
            $table->decimal('quantidade', 3);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itens_nota');
    }
}
