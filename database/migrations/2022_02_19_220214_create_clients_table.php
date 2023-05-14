<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->string('email');
            // $table->foreign('email')->references('email')->on('users')->onDelete('cascade')->onUpdate('cascade');
            // $table->string('telephone');
            // $table->foreign('telephone')->references('telephone')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nom');
            $table->string('prenom');
            $table->enum('suppression',['oui','non']);
            $table->string('email')->unique();;
            $table->integer('telephone');
            $table->string('adresse');        
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
        Schema::dropIfExists('clients');
    }
}
