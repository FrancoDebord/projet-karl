<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationsCoefficientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relations_coefficients', function (Blueprint $table) {
            $table->id();

            $table->foreignId("classe_id");
            $table->foreignId("sous_classe_id");
            $table->foreignId("matiere_id");
            $table->foreignId("coef");
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
        Schema::dropIfExists('relations_coefficients');
    }
}
