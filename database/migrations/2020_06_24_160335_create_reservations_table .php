<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments("id");
            $table->text('totalBillets');
            $table->text('totalPrice');
            $table->text('date');
            $table->text('prenom');
            $table->text('nom');
            $table->text('email');
            $table->text('adresse');
            $table->text('codePostal');
            $table->text('ville');
            $table->text('pays');           
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
        Schema::dropIfExists('reservations');
    }
}
