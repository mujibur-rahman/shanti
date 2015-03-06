<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', '500');
			$table->string('short_detail', '500');
			$table->text('details');
			$table->string('website')->nullable();
			$table->string('phone')->nullable();
			$table->enum('entrance', array('Free','Paid'))->nullable();
			$table->string('opening_hours')->nullable();
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
		Schema::table('articles', function(Blueprint $table){
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
		Schema::table('articles', function(Blueprint $table){
			$table->dropForeign('articles_article_category_id_foreign');
			$table->dropForeign('articles_address_id_foreign');
		});
		Schema::drop('articles');
	}

}
