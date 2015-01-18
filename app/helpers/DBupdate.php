<?php

class DBupdate 
{
	public static function getCreate()
	{
		Schema::create('users', function($table)
		{
			$table->increments('id');
			$table->rememberToken();
			$table->softDeletes();
			$table->timestamps();

			$table->string('user',50);
			$table->string('password',250);
			$table->string('mail',50);

		});

			//crea usuario admin
			$user 			= new User();
			$user->user 	= 'admin';
			$user->password = Hash::make('cholita');
			$user->save();

		Schema::create('categories', function($table)
		{
			$table->increments('id')->unsigned();
			$table->timestamps();
			$table->softDeletes();

			$table->string('name',50);
		});

		Schema::create('brands', function($table)
		{
			$table->increments('id')->unsigned();
			$table->timestamps();
			$table->softDeletes();

			$table->string('name',50);
		});

		Schema::create('providers', function($table)
		{
			$table->increments('id')->unsigned();
			$table->timestamps();
			$table->softDeletes();

			$table->string('name',50);
		});	

		Schema::create('items',function($table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();

			$table->string('code',50);
			$table->string('status',50);
			$table->date('date',50);
			$table->string('store',20);
			$table->string('comments',200);	
			$table->string('name',50);
			$table->text('description');
			$table->string('talle',10);
			$table->string('color',50);
			$table->string('color_description',50);
			

			$table->foreign('categories_id')->references('id')->on('categories');
			$table->foreign('brands_id')->references('id')->on('brands');

			
			$table->foreign('providers_id')->references('id')->on('providers');

			$table->double('cost_price',10,2);
			$table->double('sel_price',10,2);

			$table->date('expiration_date');
			$table->integer('stock');

			
		});
	
	}

	public static function getUpdate()
	{
		return "updating... Loricaidae.... Viehha el agua.... nuevo El Iphone ...";
	}	
}

?>