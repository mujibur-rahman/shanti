<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('addresses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('location');
			$table->boolean('is_active');
			$table->integer('thana_id')->unsigned();
			$table->integer('district_id')->unsigned();
			$table->integer('division_id')->unsigned();
			$table->integer('country_id')->unsigned();
			$table->timestamps();
		});

		Schema::table('addresses', function(Blueprint $table){
			$table->foreign('thana_id')
					->references('id')
					->on('thanas');
			$table->foreign('district_id')
					->references('id')
					->on('districts');
			$table->foreign('division_id')
					->references('id')
					->on('divisions');
			$table->foreign('country_id')->references('id')
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
		Schema::table('addresses', function(Blueprint $table){
			$table->dropForeign('thana_id_foreign');
			$table->dropForeign('district_id_foreign');
			$table->dropForeign('division_id_foreign');
			$table->dropForeign('country_id_foreign');
		});
		Schema::drop('addresses');
	}

}
