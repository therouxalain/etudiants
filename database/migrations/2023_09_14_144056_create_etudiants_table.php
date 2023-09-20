<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //  Source Laravel.com pour
    // ->string : method creates a VARCHAR equivalent column of the given length
    // ->id() // ->string('email' ... ->unique(); // 

    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom', 40);
            $table->string('prenom', 40);
            $table->string('adresse', 255);
            $table->string('telephone', 24);
            $table->string('courriel', 40)->unique();
            $table->date('naissance');
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
