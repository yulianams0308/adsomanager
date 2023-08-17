<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetenceDatasheetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competence_datasheet', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_ficha')->nullable();
            $table->unsignedBigInteger('id_competencia')->nullable();

            $table->foreign('id_ficha')
            ->references('id')
            ->on('datasheets')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_competencia')
            ->references('id')
            ->on('competences')
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
        Schema::dropIfExists('competence_datasheet');
    }
}
