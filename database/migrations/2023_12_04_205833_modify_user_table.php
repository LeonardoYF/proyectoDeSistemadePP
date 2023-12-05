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
        //
        Schema::table('users', function (Blueprint $table) {
            $table->enum('estado', ['APROBADO', 'PENDIENTE', 'RECHAZADO'])->default('PENDIENTE')->after('aprobado');
            $table->dropColumn('aprobado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('user', function (Blueprint $table) {
            $table->enum('aprobado', ['APROBADO', 'PENDIENTE', 'RECHAZADO'])->default('PENDIENTE')->after('estado');
            $table->dropColumn('estado');
        });
    }
};
