<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();

            $table->foreignId("annees_academique_id");
            $table->string("periode");
            $table->foreignId("matiere_id");
            $table->foreignId("eleve_id");
            $table->foreignId("type_composition_id");

            $table->double("note")->default(0);
            $table->date("date_composition");
            $table->string("appreciation");

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
        Schema::dropIfExists('notes');
    }
}
