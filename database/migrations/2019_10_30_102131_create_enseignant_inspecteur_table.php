<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignantInspecteurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignant_inspecteur', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id'); 
            $table->Integer('id_enseignant_fk')->unsigned()->nullable(); 
            $table->foreign('id_enseignant_fk')->references('id')->on('enseignants')->onDelete('cascade')->onUpdate("cascade");
            $table->Integer('id_inspecteur_fk')->unsigned()->nullable(); 
            $table->foreign('id_inspecteur_fk')->references('id')->on('inspecteur_regs')->onDelete('cascade')->onUpdate("cascade");
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
        Schema::dropIfExists('enseignant_inspecteur');
    }
}
