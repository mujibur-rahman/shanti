<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->enum('title', array('Mr.','Mrs.','Ms.','Miss.'));
			$table->string('firstname');
			$table->string('middlename');
			$table->string('lastname');
			$table->string('fullname');
			$table->string('gender', 8);
			$table->string('country', 4);
			$table->string('state', 100);
			$table->string('city', 100);
			$table->text('address');
			$table->string('postal', 50);
			$table->integer('role_id')->unsigned();
			$table->boolean('isactive');
			$table->string('sort');
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
