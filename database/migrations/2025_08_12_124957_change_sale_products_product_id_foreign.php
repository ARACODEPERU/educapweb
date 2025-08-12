<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('sale_products', function (Blueprint $table) {
            // 1. Eliminar la restricción de clave foránea existente
            $table->dropForeign(['product_id']);

            // 2. Cambiar el tipo de columna si es necesario (opcional)
            // $table->unsignedBigInteger('product_id')->change();

            // 3. Crear la nueva restricción que apunta a aca_courses
            $table->foreign('product_id')
                  ->references('id')
                  ->on('aca_courses')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('sale_products', function (Blueprint $table) {
            // Para revertir los cambios
            $table->dropForeign(['product_id']);

            // Restaurar la restricción original (si es necesario)
            $table->foreign('product_id')
                  ->references('id')
                  ->on('products')
                  ->onDelete('cascade');
        });
    }
};
