<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nif');

            $table->integer('id_usr')->unsigned()->nullable();
            $table->foreign('id_usr')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');

            $table->integer('id_person')->unsigned();
            $table->foreign('id_person')
                    ->references('id')
                    ->on('people')
                    ->onDelete('cascade');


            $table->integer('id_psition')->unsigned();
            $table->foreign('id_psition')
                    ->references('id')
                    ->on('positions')
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
        Schema::dropIfExists('employees');
    }
}
