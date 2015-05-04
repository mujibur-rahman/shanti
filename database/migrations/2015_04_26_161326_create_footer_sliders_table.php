<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFooterSlidersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('footer_sliders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('image', '100');
			$table->string('title', '500');
			$table->boolean('is_active');
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
		Schema::drop('footer_sliders');
	}

}
