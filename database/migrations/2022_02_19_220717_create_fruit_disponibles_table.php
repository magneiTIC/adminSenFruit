<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFruitDisponiblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fruit_disponibles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fruit_id');
            $table->foreign('fruit_id')->references('id')->on('fruits')->onDelete('cascade');
            $table->unsignedBigInteger('mois_id');
            $table->foreign('mois_id')->references('id')->on('mois')->onDelete('cascade');
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
        Schema::dropIfExists('fruit_disponibles');
    }
}
