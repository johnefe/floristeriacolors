<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditTableClientsNulleable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->string('nombres')->nullable()->change();
            $table->string('apellidos')->nullable()->change();
            $table->string('sexo',1)->nullable()->change();
            $table->string('direccion')->nullable()->change();
            $table->string('celular')->nullable()->change();
            $table->date('fecha_nacimiento')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function (Blueprint $table) {
            //
        });
    }
}
