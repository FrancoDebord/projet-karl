<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatimentsEquipementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batiments_equipements', function (Blueprint $table) {
            $table->id();

            $table->foreignId("batiment_id");
            $table->foreignId("equipement_id");

            $table->unsignedInteger("nombre")->default(0);
            
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
        Schema::dropIfExists('batiments_equipements');
    }
}
