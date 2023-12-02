<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['Service', 'Produit']);
            $table->string('titre');
            $table->text('description');
            $table->dateTime('delais');
            $table->string('duree_collabz');
            $table->string('liens');
            $table->text('contraintes'); // Ajouter des contraintes "infos/questions obligatoires pour postuler"
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
