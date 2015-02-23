<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleCategoriesLanguageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('article_categories_language', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('page_view_count');
			$table->string('meta_keyword');
			$table->text('meta_description');
			$table->string('title');
			$table->boolean('isactive');
			$table->tinyInteger('sort');
			$table->integer('article_category_id')->unsigned();
			$table->integer('language_id')->unsigned();
			$table->timestamps();
		});

		Schema::table('article_categories_language', function(Blueprint $table)
		{
			$table->foreign('article_category_id')
												->references('id')
												->on('article_category');		
			$table->foreign('language_id')
										  ->references('id')
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
		Schema::drop('article_categories_language');
		Schema::table("article_categories_language", function(Blueprint $table){
			$table->dropForeign('article_category_id_foreign');
			$table->dropForeign('language_id_foreign');
		});
		
	}

}
