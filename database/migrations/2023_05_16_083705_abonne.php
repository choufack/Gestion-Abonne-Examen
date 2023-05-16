<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('abonne', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nom',100);
            $table->string('Prenom',100);
            $table->integer('Age');
            $table->char('Sexe',1)-> default('M');
            $table->String('Profession');
            $table->string('Rue',30);
            $table->string('Code_Postal',100);
            $table->string('Ville');
            $table->unsignedInteger('id_motivation');
            $table->foreign('id_motivation')-> references('id') ->on ('motivation') -> onDelete('cascade');
            $table->string('Pays');
            $table->string('Telephone')->nullable();
            $table->string('Email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('abonne');
    }
};
