<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('article_category', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('page_view_count');
			$table->string('meta_keyword');
			$table->text('meta_description');
			$table->string('title');
			$table->boolean('isactive');
			$table->tinyInteger('sort');
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
		Schema::drop('article_category');
	}

}
