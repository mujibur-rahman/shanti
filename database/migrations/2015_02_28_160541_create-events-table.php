<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', '500');
			$table->text('details');
			$table->string('info_title', '500');
			$table->string('website')->nullable();
			$table->string('phone')->nullable();
			$table->enum('entrance', array('Free','Paid'))->nullable();
			$table->float('entrance_fees')->nullable();
			$table->dateTime('opening_date')->nullable();
			$table->dateTime('ending_date')->nullable();
			$table->time('opening_hours')->nullable();
			$table->time('ending_hours')->nullable();
			$table->string('page_view_count')->nullable();
			$table->string('meta_keyword')->nullable();
			$table->string('meta_description')->nullable();
			$table->tinyInteger('is_reviewing')->nullable();
			$table->boolean('is_active');
			$table->string('sort')->nullable();;
			$table->integer('article_category_id')->unsigned();
			$table->integer('address_id')->unsigned();
			$table->timestamps();
		});

		Schema::table('events', function(Blueprint $table){
			$table->foreign('article_category_id')
					->references('id')
					->on('article_category');
			$table->foreign('address_id')
					->references('id')
					->on('addresses');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('events', function(Blueprint $table){
			$table->dropForeign('article_category_id_foreign');
			$table->dropForeign('address_id_foreign');
		});
		Schema::drop('events');
	}

}
