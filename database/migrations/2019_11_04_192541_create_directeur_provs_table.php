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
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->string('nom_dr_prov');
            $table->string('prenom_dr_prov');
            $table->string('email_dr_prov')->unique();
            $table->string('telephone');
            $table->string('photo_dr_prov');
            $table->string('adresse_dr_prov');
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_super')->default(false);
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
        Schema::dropIfExists('directeur_provs');
    }
}
