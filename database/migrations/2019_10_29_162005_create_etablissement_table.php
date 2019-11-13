<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtablissementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etablissement', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->string('libelle_etablissement');
            $table->string('ville_etablissement');
            $table->string('type_etablissement');
            $table->string('adresse_etablissement');
            $table->string('telephone_etablissement');
            $table->Integer('id_dirprovinciale_fk')->unsigned()->nullable();
            $table->Integer('id_dirregion_fk')->unsigned()->nullable();
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
        Schema::dropIfExists('etablissement');
    }
}
