<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnseignantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_enseignant');
            $table->string('prenom_enseignant');
            $table->string('tel_enseignant');
            $table->string('email_enseignant');
            $table->date('adresse_enseignant');
            $table->string('photo_enseignant')->nullable();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_teacher')->default(false);
            $table->BigInteger('id_matiere_fk')->unsigned()->nullable();
            $table->BigInteger('id_agenda_fk')->unsigned()->nullable();
            $table->BigInteger('id_dirregional_fk')->unsigned()->nullable();
            $table->BigInteger('id_conference_fk')->unsigned()->nullable();
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
        Schema::dropIfExists('enseignants');
    }
}
