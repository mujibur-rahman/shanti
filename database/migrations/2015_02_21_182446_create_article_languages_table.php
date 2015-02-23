<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleLanguagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('article_languages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', '500');
			$table->string('short_detail', '500');
			$table->text('details');
			$table->string('page_view_count')->nullable();
			$table->string('meta_keyword')->nullable();
			$table->string('meta_description')->nullable();
			$table->boolean('is_active');
			$table->string('sort')->nullable();;
			$table->integer('article_id')->unsigned();
			$table->timestamps();
		});
		Schema::table('article_languages', function(Blueprint $table){
			$table->foreign('article_id')
					->references('id')
					->on('articles');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('article_languages', function(Blueprint $table){
			$table->dropForeign('article_id_foreign');
		});
		Schema::drop('article_languages');
	}

}
