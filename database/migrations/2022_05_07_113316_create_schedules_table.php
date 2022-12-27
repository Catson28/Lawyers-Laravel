<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('customers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_ownr')->unsigned();
            $table->foreign('id_ownr')
                    ->references('id')
                    ->on('owners')
                    ->onDelete('cascade');
            $table->integer('id_prsn_prtcp')->unsigned();
            $table->foreign('id_prsn_prtcp')
                    ->references('id')
                    ->on('persn_partcps')
                    ->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('status', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('processes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_typ')->unsigned();
            $table->foreign('id_typ')
                    ->references('id')
                    ->on('types')
                    ->onDelete('cascade');
            $table->integer('id_ownr')->unsigned();
            $table->foreign('id_ownr')
                    ->references('id')
                    ->on('owners')
                    ->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('statu_processes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('data');
            $table->integer('id_prcss')->unsigned();
            $table->foreign('id_prcss')
                    ->references('id')
                    ->on('processes')
                    ->onDelete('cascade');
            $table->integer('id_stat')->unsigned();
            $table->foreign('id_stat')
                    ->references('id')
                    ->on('status')
                    ->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('process_workers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_employ')->unsigned();
            $table->foreign('id_employ')
                    ->references('id')
                    ->on('employees')
                    ->onDelete('cascade');
            $table->integer('id_prcss')->unsigned();
            $table->foreign('id_prcss')
                    ->references('id')
                    ->on('processes')
                    ->onDelete('cascade');
            $table->timestamps();
        });
        
        Schema::create('docs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_fil')->unsigned();
            $table->foreign('id_fil')
                    ->references('id')
                    ->on('files')
                    ->onDelete('cascade');
            $table->integer('id_prcss')->unsigned();
            $table->foreign('id_prcss')
                    ->references('id')
                    ->on('processes')
                    ->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('schedules', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('time');
            $table->integer('id_prcss')->unsigned();
            $table->foreign('id_prcss')
                    ->references('id')
                    ->on('processes')
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
        Schema::dropIfExists('schedules');
    }
}
