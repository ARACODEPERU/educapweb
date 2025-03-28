<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('onli_sales', function (Blueprint $table) {
            $table->boolean('email_sent')->default(false)->nullable()->comment('para saber si ya se envio el correo con la boleta electronica');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('onli_sales', function (Blueprint $table) {
            $table->dropColumn('email_sent');
        });
    }
};
