<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFeaturedInfoArticleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('articles', function(Blueprint $table)
		{
			$table->string('bn_featured_title', '200')->nullable();
			$table->string('bn_price')->nullable();
			$table->string('bn_strike_price')->nullable();
			$table->string('bn_featured_details')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('articles', function(Blueprint $table)
		{
			//
		});
	}

}
