<?php

use Illuminate\Database\Migrations\Migration;

class PostgresqlTest extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('test', function($table)
		{
			$table->increments('id');
			$table->text('data');
		});
		DB::table('test')->insert(
			array('data' => 'This data was inserted by the migration'),
			array('data' => 'So was this data!')
		);

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('test');
	}

}