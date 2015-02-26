<?php

class DBupdate 
{
	public static function create()
	{
		//crea usuario admin
		/*
			$user 			= new User();
			$user->user 	= 'admin';
			$user->password = Hash::make('cholita');
			$user->save();
		*/	
	}

	public static function up()
	{
	/*
		Schema::table('categories', function($table)
		{
			$table->softDeletes();
		});

		Schema::table('clients', function($table)
		{
			$table->softDeletes();
		});
	
		Schema::table('company_db', function($table)
		{
			$table->softDeletes();
		});
	
		Schema::table('doctors', function($table)
		{
			$table->softDeletes();
		});

		Schema::table('items', function($table)
		{
			$table->softDeletes();	
		});

		Schema::table('items_categories', function($table)
		{
			$table->softDeletes();
		});
		*/

		Schema::table('obras_sociales', function($table)
		{
			$table->softDeletes();	
		});

		Schema::table('providers', function($table)
		{
			$table->softDeletes();	
		});

		Schema::table('purchases', function($table)
		{
			$table->softDeletes();	
		});

		Schema::table('purchases_items', function($table)
		{
			$table->softDeletes();	
		});

		Schema::table('purchases_temporal', function($table)
		{
			$table->softDeletes();	
		});

		Schema::table('users', function($table)
		{
			$table->softDeletes();	
		});
	}	
}

?>