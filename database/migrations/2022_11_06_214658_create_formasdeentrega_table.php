<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormasdeentregaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formasdeentregas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->tinyInteger('estado')->default(1);
            $table->tinyInteger('pidedirec')->default(0);
            $table->float('costo')->default(0);
            //$table->tinyInteger('cobra')->default(1);


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
        Schema::dropIfExists('formasdeentregas');
    }
}
