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
            $table->increments('id');
            $table->string('nom_dreg');
            $table->string('prenom_dreg');
            $table->string('email_dreg')->unique();
            $table->string('telephone');
            $table->string('adresse_dreg');
            $table->string('photo_dreg');
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_dreg')->default(false);
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
        Schema::dropIfExists('directeur_regs');
    }
}
