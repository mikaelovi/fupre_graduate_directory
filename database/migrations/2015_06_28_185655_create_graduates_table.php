<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGraduatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('graduates', function(Blueprint $table)
		{
			$table->increments('id');

			$table->text('first_name');
			$table->text('last_name');
			$table->text('home_address');
			$table->text('phone_no');
			$table->text('email');
			$table->text('mat_no');
			$table->text('college');
			$table->text('department');
			$table->text('set');
			$table->text('graduation_session');
			$table->text('photo');
			
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
		Schema::drop('graduates');
	}

}
