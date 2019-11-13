<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirecteurRegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directeur_regs', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('nom_directeurregional');
            $table->string('prenom_directeurregional');
            $table->string('email_directeurregional');
            $table->string('telephone_directeurregional');
            $table->string('photo_directeurregional');
            $table->string('adresse_directeurregional');
            $table->BigInteger('id_conference_fk')->unsigned()->nullable(); 
            $table->string('password'); 
            $table->boolean('is_dreg')->default(false);
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
        Schema::dropIfExists('directeur_regs');
    }
}
