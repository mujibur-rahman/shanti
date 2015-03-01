<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventLanguagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('event_languages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', '500');
			$table->string('info_title', '500');
			$table->text('details');
			$table->string('page_view_count')->nullable();
			$table->string('meta_keyword')->nullable();
			$table->string('meta_description')->nullable();
			$table->boolean('is_active');
			$table->string('sort')->nullable();;
			$table->integer('event_id')->unsigned();
			$table->integer('language_id')->unsigned();
			$table->timestamps();
		});
		Schema::table('event_languages', function(Blueprint $table){
			$table->foreign('event_id')->references('id')->on('events');
			$table->foreign('language_id')->references('id')
					->on('languages');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('event_languages', function(Blueprint $table)
		{
			$table->dropForeign('language_id_foreign');
			$table->dropForeign('event_id_foreign');
		});
		Schema::drop('event_languages');
	}

}
