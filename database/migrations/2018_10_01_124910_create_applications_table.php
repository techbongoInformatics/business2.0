<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('first_name',100);
            $table->string('middle_name',100)->nullable();
            $table->string('last_name',100)->nullable();
            $table->string('college_name',200);
            $table->string('dept',100);
            $table->string('email',100);
            $table->integer('year');
            $table->integer('choice')->unsigned();
            $table->bigInteger('mobile');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
