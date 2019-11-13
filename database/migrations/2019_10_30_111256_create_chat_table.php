<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->string('contenu_chat');
            $table->string('type_chat');
            $table->string('lieu_chat');
            $table->dateTime('date_chat');
            $table->BigInteger('id_seance_fk')->unsigned()->nullable();
            $table->Integer('id_gestionsalle_fk')->unsigned()->nullable();
            $table->Integer('id_dirregional_fk')->unsigned()->nullable();
            $table->Integer('id_dirprovinciale_fk')->unsigned()->nullable();
            $table->Integer('id_etudiant_fk')->unsigned()->nullable();
            $table->Integer('id_enseignant_fk')->unsigned()->nullable();
            $table->Integer('id_inspecteur_fk')->unsigned()->nullable();
            $table->Integer('id_admin_fk')->unsigned()->nullable();
            $table->Integer('id_parent_fk')->unsigned()->nullable();

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
        Schema::dropIfExists('chat');
    }
}