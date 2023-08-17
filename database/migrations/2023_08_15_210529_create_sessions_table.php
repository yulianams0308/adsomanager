<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->string('observacion');

            $table->unsignedBigInteger('id_ficha')->unique();
            $table->unsignedBigInteger('id_ambiente')->unique();


            $table->foreign('id_ficha')
            ->references('id')
            ->on('datasheets')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_ambiente')
            ->references('id')
            ->on('rooms')
            ->onDelete('cascade')
            ->onUpdate('cascade');

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
        Schema::dropIfExists('sessions');
    }
}
