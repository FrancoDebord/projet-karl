<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfMatieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prof_matieres', function (Blueprint $table) {
            $table->id();
            $table->foreignId("professeur_id");
            $table->foreignId("matiere_id");

            $table->enum("priorite",["Principale","Secondaire"])->defaut("Principale");
            
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
        Schema::dropIfExists('prof_matieres');
    }
}
