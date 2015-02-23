<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThanasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('thanas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->boolean('is_active');
			$table->integer('district_id')->unsigned();
			$table->timestamps();
		});
		Schema::table('thanas', function(Blueprint $table){
			$table->foreign('district_id')
					->references('id')
					->on('districts');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('thanas', function(Blueprint $table){
			$table->dropForeign('district_id_foreign');
		});
		Schema::drop('thanas');
	}

}
