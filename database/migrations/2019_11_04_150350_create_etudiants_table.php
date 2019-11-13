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
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('nom_etudiant');
            $table->string('prenom_etudiant');
            $table->string('sexe');
            $table->string('ville_residence');
            $table->date('date_naissance');
            $table->string('ville_origine');
            $table->string('code_massar');
            $table->string('adresse_etudiant');
            $table->string('email');
            $table->string('telephone');
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_etudiant')->default(false);
            $table->BigInteger('id_niveauscolaire_fk')->unsigned()->nullable();
            $table->BigInteger('id_agenda_fk')->unsigned()->nullable();
            $table->BigInteger('id_parent_fk')->unsigned()->nullable();
            $table->BigInteger('id_dirregion_fk')->unsigned()->nullable();
            $table->BigInteger('id_conference_fk')->unsigned()->nullable();
            $table->string('photo_etudient')->nullable();
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
