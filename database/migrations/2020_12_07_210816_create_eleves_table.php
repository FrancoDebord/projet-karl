<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleves', function (Blueprint $table) {
            $table->id();
            $table->string("numero_matricule")->unique();
            $table->string("nom");
            $table->string("prenom");
            $table->enum("sexe",["F","M"]);
            $table->date("date_naissance");
            $table->string("lieu_naissance");
            $table->string("tel")->nullable();
            $table->string("email")->nullable();
            $table->string("annee_inscription");
            $table->foreignId("classe_id");
            $table->foreignId("sous_classe_id");

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
        Schema::dropIfExists('eleves');
    }
}
