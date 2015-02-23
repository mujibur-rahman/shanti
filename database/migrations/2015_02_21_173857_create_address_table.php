<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('address', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('location');
			$table->boolean('is_active');
			$table->integer('thana_id')->unsigned();
			$table->integer('district_id')->unsigned();
			$table->integer('division_id')->unsigned();
			$table->timestamps();
		});

		Schema::table('address', function(Blueprint $table){
			$table->foreign('thana_id')
					->references('id')
					->on('thana');
			$table->foreign('district_id')
					->references('id')
					->on('district');
			$table->foreign('division_id')
					->references('id')
					->on('division');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('address', function(Blueprint $table){
			$table->dropForeign('thana_id_foreign');
			$table->dropForeign('district_id_foreign');
			$table->dropForeign('division_id_foreign');
		});
		Schema::drop('address');
	}

}
