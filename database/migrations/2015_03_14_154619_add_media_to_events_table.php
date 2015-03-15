<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMediaToEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('events', function(Blueprint $table)
		{
			$table->string('media', '100')->nullable();
			$table->boolean('last_minute')->nullable();
			$table->boolean('featured')->nullable();
			$table->string('featured_title', '200')->nullable();
			$table->string('price')->nullable();
			$table->string('strike_price')->nullable();
			$table->string('featured_details')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('events', function(Blueprint $table)
		{
			//
		});
	}

}
