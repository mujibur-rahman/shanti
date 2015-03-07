<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ads', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('image', '100');
			$table->string('short_desc', '500');
			$table->text('details');
			$table->dateTime('start_date')->nullable();
			$table->dateTime('end_date')->nullable();
			$table->string('link');
			$table->string('meta_keyword')->nullable();
			$table->string('meta_description')->nullable();
			$table->tinyInteger('is_paid')->nullable();
			$table->tinyInteger('is_lifetime')->nullable();
			$table->tinyInteger('is_pending')->nullable();
			$table->boolean('is_active');
			$table->string('sort')->nullable();;
			$table->integer('ad_position_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->timestamps();
		});

		Schema::table('ads', function(Blueprint $table){
			$table->foreign('ad_position_id')->references('id')->on('ad_positions');
			$table->foreign('user_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ads', function(Blueprint $table){
			$table->dropForeign('ads_ad_position_id_foreign');
			$table->dropForeign('ads_user_id_foreign');
		});
		Schema::drop('ads');
	}

}
