<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persn_partcps', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_peop')->unsigned();
            $table->foreign('id_peop')
                    ->references('id')
                    ->on('people')
                    ->onDelete('cascade');
            $table->integer('id_partcp')->unsigned();
            $table->foreign('id_partcp')
                    ->references('id')
                    ->on('participants')
                    ->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('owners', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->integer('id_prsn_prtcp')->unsigned();
            $table->foreign('id_prsn_prtcp')
                    ->references('id')
                    ->on('persn_partcps')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('persn_partcps');
        Schema::dropIfExists('owners');
    }
}
