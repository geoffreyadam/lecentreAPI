<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->increments("id");
            $table->text('ouvert');
            $table->text('reouverture')->nullable();;
            $table->text('acces_tram');
            $table->text('acces_bus');
            $table->text('horaires_fermé');
            $table->text('horaires_ouvert');
            $table->text('horaires_plus')->nullable();
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
        Schema::dropIfExists('infos');
    }
}
