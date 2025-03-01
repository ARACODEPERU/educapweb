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
    Schema::table('aca_certificates_parameters', function (Blueprint $table) {
        // Verificar y agregar 'state'
        if (!Schema::hasColumn('aca_certificates_parameters', 'state')) {
            $table->boolean('state')->default(true)
                ->comment('estado del certificado (activo/inactivo)');
        }

        // Verificar y agregar 'color_date'
        if (!Schema::hasColumn('aca_certificates_parameters', 'color_date')) {
            $table->string('color_date', 20)->default('#0d0603')->nullable()
                ->after('font_size_date')
                ->comment('color para la fecha');
        }

        // Verificar y agregar 'visible_date'
        if (!Schema::hasColumn('aca_certificates_parameters', 'visible_date')) {
            $table->boolean('visible_date')->default(true)
                ->after('color_date')
                ->comment('para visualizar o no la fecha');
        }

        // Verificar y agregar 'color_names'
        if (!Schema::hasColumn('aca_certificates_parameters', 'color_names')) {
            $table->string('color_names', 20)->default('#0d0603')->nullable()
                ->after('font_size_names')
                ->comment('color de letra para nombre de estudiante');
        }

        // Verificar y agregar 'visible_names'
        if (!Schema::hasColumn('aca_certificates_parameters', 'visible_names')) {
            $table->boolean('visible_names')->default(true)
                ->after('color_names')
                ->comment('para visualizar nombre estudiante');
        }

        // Verificar y agregar 'color_title'
        if (!Schema::hasColumn('aca_certificates_parameters', 'color_title')) {
            $table->string('color_title', 20)->default('#0d0603')->nullable()
                ->after('max_width_title')
                ->comment('color de letra para el titulo nombre de curso');
        }

        // Verificar y agregar 'visible_title'
        if (!Schema::hasColumn('aca_certificates_parameters', 'visible_title')) {
            $table->boolean('visible_title')->default(true)
                ->after('color_title')
                ->comment('para visualizar el nombre del curso');
        }

        // Verificar y agregar 'color_description'
        if (!Schema::hasColumn('aca_certificates_parameters', 'color_description')) {
            $table->string('color_description', 20)->default('#0d0603')->nullable()
                ->after('font_size_description')
                ->comment('color de letra para la descripcion');
        }

        // Verificar y agregar 'visible_description'
        if (!Schema::hasColumn('aca_certificates_parameters', 'visible_description')) {
            $table->boolean('visible_description')->default(true)
                ->after('color_description')
                ->comment('para visualizar la descripcion');
        }

        // Verificar y agregar 'visible_image_qr'
        if (!Schema::hasColumn('aca_certificates_parameters', 'visible_image_qr')) {
            $table->boolean('visible_image_qr')->default(true)
                ->after('font_align_qr')
                ->comment('para visualizar la imagen qr');
        }

        // Verificar y agregar 'certificate_img_finished'
        if (!Schema::hasColumn('aca_certificates_parameters', 'certificate_img_finished')) {
            $table->string('certificate_img_finished')->nullable()
                ->after('state')
                ->comment('para guardar la imagen del certificado terminado');
        }
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('aca_certificates_parameters', function (Blueprint $table) {
            $table->dropColumn('certificate_img_finished');
            $table->dropColumn('visible_image_qr');
            $table->dropColumn('visible_description');
            $table->dropColumn('color_description');
            $table->dropColumn('visible_title');
            $table->dropColumn('color_title');
            $table->dropColumn('visible_names');
            $table->dropColumn('color_names');
            $table->dropColumn('visible_date');
            $table->dropColumn('color_date');
        });
    }
};
