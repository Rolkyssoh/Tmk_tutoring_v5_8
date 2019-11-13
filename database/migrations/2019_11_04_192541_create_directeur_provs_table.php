<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirecteurProvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directeur_provs', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('nom_directeurprovinciale');
            $table->string('prenom_directeurprovinciale');
            $table->string('email_directeurprovinciale');
            $table->string('telephone_directeurprovinciale');
            $table->string('photo_directeurprovinciale');
            $table->BigInteger('id_dirregion_fk')->unsigned()->nullable(); 
            $table->string('adresse_directeurprovinciale');
            $table->BigInteger('id_conference_fk')->unsigned()->nullable();  
            $table->string('password');
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
        Schema::dropIfExists('directeur_provs');
    }
}
