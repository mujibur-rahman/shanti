<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLanguageIdArticleLanguagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('article_languages', function(Blueprint $table)
		{
			$table->integer('language_id')->unsigned();
		});
		Schema::table('article_languages', function(Blueprint $table){
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
		Schema::table('article_languages', function(Blueprint $table)
		{
			$table->dropForeign('article_languages_language_id_foreign');
		});
	}

}
