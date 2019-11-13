<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestSallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gest_salles', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('nom_gestionnaire');
            $table->string('prenom_gestionsalle');
            $table->string('email_gestionnaire')->unique();
            $table->string('adresse_gestionsalle');
            $table->bigInteger('tel_gestionsalle');
            $table->string('password');
            $table->string('photo_gestionsalle');
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_super')->default(false);
            $table->rememberToken();
            $table->timestamps();
            $table->Integer('id_dirregion_fk')->unsigned()->nullable();
            $table->Integer('id_dirprovinciale_fk')->unsigned()->nullable();
            $table->BigInteger('id_seance_fk')->unsigned()->nullable();
            $table->BigInteger('id_salle_fk')->unsigned()->nullable();
            $table->BigInteger('id_conference_fk')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gest_salles');
    }
}
