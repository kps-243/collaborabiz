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
        Schema::create('createur', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom', 100);
            $table->string('prenom', 100);
            $table->string('telephone', 100);
            $table->string('email', 100);
            $table->string('password', 100);
            $table->date('date_naissance');
            $table->string('portfolio', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('createur');
    }
};