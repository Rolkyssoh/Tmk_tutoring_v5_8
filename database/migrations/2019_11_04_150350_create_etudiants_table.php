<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id'); 
            $table->string('nom_etudient');
            $table->string('prenom_etudient');
            $table->string('sexe_etudient');
            $table->string('ville_residence'); 
	        $table->date('date_naissance'); 
            $table->string('ville_origine');
            $table->string('code_massar');
            $table->string('adresse_etudient');
            $table->string('email_etudient');
            $table->string('telephone_etudient');
            $table->string('password');
            $table->BigInteger('id_niveauscolaire_fk')->unsigned()->nullable(); 
            $table->BigInteger('id_agenda_fk')->unsigned()->nullable();
            $table->BigInteger('id_parent_fk')->unsigned()->nullable();
            $table->BigInteger('id_dirregion_fk')->unsigned()->nullable();
            $table->BigInteger('id_conference_fk')->unsigned()->nullable();
            $table->string('photo_etudient'); 
            $table->boolean('is_etudiant')->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('etudiants');
    }
}
