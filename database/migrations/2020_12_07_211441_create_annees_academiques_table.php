<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnneesAcademiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annees_academiques', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger("annee_debut");
            $table->unsignedInteger("annee_fin");
            $table->date("date_demarrage");
            $table->date("date_cloture")->nullable();
            $table->enum("periodicite",["semestre","trimestre"])->default("semestre");
            $table->unsignedInteger("periode_en_cours")->default(1); // 1 pour semestre ou  trimestre 1
            $table->enum("etat",["en cours","terminé","blanchi"])->default("en cours");
            
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
        Schema::dropIfExists('annees_academiques');
    }
}
