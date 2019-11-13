<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInspecteurRegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void 
     */
    public function up()
    {
        Schema::create('inspecteur_regs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_inspect');
            $table->string('prenom_inspect');
            $table->string('email_inspect')->unique();
            $table->string('telephone');
            $table->string('adresse_inspect');
            $table->string('password');
            $table->string('photo_inspect');
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_inspect')->default(false);
            $table->BigInteger('id_matiere_fk')->unsigned()->nullable();
            $table->BigInteger('id_agenda_fk')->unsigned()->nullable();
            $table->BigInteger('id_dirregion_fk')->unsigned()->nullable();
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
        Schema::dropIfExists('inspecteur_regs');
    }
}
