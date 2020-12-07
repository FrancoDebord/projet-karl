<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatimentsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batiments', function (Blueprint $table) {
            $table->id();
            $table->string("libelle");
            $table->unsignedInteger("nbre_places")->defaut(0);
            $table->enum("etat",["disponible","non disponible"])->default("disponible");

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
        Schema::dropIfExists('batiments');
    }
}
