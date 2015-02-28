<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDivisionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('divisions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->boolean('is_active');
			$table->integer('country_id')->unsigned();
			$table->timestamps();
		});
		Schema::table('divisions', function(Blueprint $table){
			$table->foreign('country_id')
					->references('id')
					->on('countries');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('divisions', function(Blueprint $table){
			$table->dropForeign('country_id_foreign');
		});
		Schema::drop('divisions');
	}

}
