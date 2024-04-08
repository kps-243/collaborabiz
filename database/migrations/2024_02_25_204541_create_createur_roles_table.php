<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreateurRolesTable extends Migration
{
    public function up()
    {
        Schema::create('createur_roles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('createur_id')->constrained()->onDelete('cascade');
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('createur_roles');
    }
}