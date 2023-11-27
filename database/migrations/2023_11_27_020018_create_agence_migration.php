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
        Schema::create('agence', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom', 255);
            $table->string('prenom', 255);
            $table->string('telephone', 255);
            $table->string('email', 255);
            $table->string('password', 255);
            $table->string('nom_agence', 255);
            $table->string('lien_agence', 255);
            $table->string('siret_agence', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agence');
    }
};