<?php

class DBupdate 
{
	public static function create()
	{

		//crea tabla
		/*
		Schema::create('categories', function($table)
		{
			$table->increments('id');
			$table->softDeletes();
			$table->timestamps();

			$table->string('name','50');
		});
		*/
		
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

		Schema::table('obrassociales', function($table)
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

		// CHANGES TO MATCH DOCTORS MODIFICATIONS FROM FERNANDO

		Schema::rename('obras_sociales', 'obrassociales');

		Schema::table('doctors', function($table)
		{
			$table->string('license_province', 40)->after('license');
		});		

		Schema::table('doctors', function($table)
		{
			$table->integer('obrassociales_id')->nullable()->unsigned()->after('license');
			$table->foreign('obrassociales_id')->references('id')->on('obrassociales');
		});
		

		// CHANGES TO MATCH CLIENTS MODIFICATIONS FROM FERNANDO

		Schema::table('clients', function($table)
		{
			$table->dropColumn('company_name');
			$table->dropColumn('cuit');
			$table->integer('obrassociales_id')->nullable()->unsigned()->after('cell_phone');
			$table->foreign('obrassociales_id')->references('id')->on('obrassociales');
			$table->string('address', 100)->after('obrassociales_id');
		});
		*/
	}	
}

?>