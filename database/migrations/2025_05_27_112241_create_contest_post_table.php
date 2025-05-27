<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contest_posts', function (Blueprint $table) {
        $table->id();
        $table->timestamps();
        $table->string('nome_giocatore');
        $table->string('cognome');
        $table->string('nome_epic');
        $table->string('email');
        $table->string('piattaforma');
        $table->string('img'); 
       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contest_posts');
    }
};
