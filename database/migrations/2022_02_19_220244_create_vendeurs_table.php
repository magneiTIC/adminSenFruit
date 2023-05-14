<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendeursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendeurs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->string('email');
            // $table->foreign('email')->references('email')->on('users')->onDelete('cascade')->onUpdate('cascade');
            // $table->string('telephone');
            // $table->foreign('telephone')->references('telephone')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nom');
            $table->string('prenom');
            $table->enum('activation',['oui','non']);
            $table->enum('suppression',['oui','non']);
            $table->string('email');
            $table->integer('telephone');
            $table->string('adresse');
            $table->string('description');
            $table->integer('CNI');
            $table->string('notation');



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
        Schema::dropIfExists('vendeurs');
    }
}
