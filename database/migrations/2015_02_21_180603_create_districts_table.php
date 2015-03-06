<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrictsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('districts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->boolean('is_active');
			$table->integer('division_id')->unsigned();
			$table->timestamps();
		});
		Schema::table('districts', function(Blueprint $table){
			$table->foreign('division_id')
					->references('id')
					->on('divisions');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('districts', function(Blueprint $table){
			$table->dropForeign('districts_division_id_foreign');
		});
		Schema::drop('districts');
	}

}
