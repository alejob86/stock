<?php

use Illuminate\Database\Migrations\Migration;

class CreateClients extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients', function($newtable)
        {
		   $newtable->increments('id');
		   $newtable->string('name', 100);
		   $newtable->string('last_name', 100);
		   $newtable->string('dni', 20);
		   $newtable->string('email', 100);
		   $newtable->string('phone', 100);
		   $newtable->string('cell_phone', 100);
		   $newtable->integer('obrassociales_id')->nullable()->unsigned();
		   $newtable->string('address', 100);
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
		Schema::drop('clients');
	}
}