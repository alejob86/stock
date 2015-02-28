<?php

use Illuminate\Database\Migrations\Migration;

class CreateDoctors extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('doctors', function($newtable)
        {
		   $newtable->increments('id');
		   $newtable->string('name', 100);
		   $newtable->string('last_name', 100);
		   $newtable->string('dni', 20);
		   $newtable->string('email', 100);
		   $newtable->string('phone', 100);
		   $newtable->string('cell_phone', 100);
		   $newtable->string('license', 40);
		   $newtable->string('license_province', 40);
		   $newtable->integer('obrassociales_id')->nullable()->unsigned();
		   $newtable->timestamps();
		   $newtable->softDeletes();
		   $newtable->foreign('obrassociales_id')->references('id')->on('obrassociales');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('doctors');
	}
}