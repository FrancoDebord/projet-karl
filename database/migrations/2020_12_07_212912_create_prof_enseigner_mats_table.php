<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfEnseignerMatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prof_enseigner_mats', function (Blueprint $table) {
            $table->id();
            $table->foreignId("annees_academique_id");
            $table->foreignId("professeur_id");
            $table->foreignId("matiere_id");
            $table->foreignId("localisations_sous_classe_id");

            $table->date("date_debut");
            $table->date("date_fin")->nullable();

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
        Schema::dropIfExists('prof_enseigner_mats');
    }
}
