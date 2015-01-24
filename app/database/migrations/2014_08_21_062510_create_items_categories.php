<?php

use Illuminate\Database\Migrations\Migration;

class CreateItemsCategories extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items_categories', function($newtable)
        {		   
           $newtable->increments('id');
           $newtable->integer('item_id')->nullable()->unsigned();
		   $newtable->integer('category_id')->nullable()->unsigned();
		   		   
		   $newtable->timestamps();

		   $newtable->foreign('item_id')->references('id')->on('items');
		   $newtable->foreign('category_id')->references('id')->on('categories');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		Schema::drop('items_categories');
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}