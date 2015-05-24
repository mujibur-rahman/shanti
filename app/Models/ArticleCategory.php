<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	*/
	protected $table = "article_category";

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['page_view_count', 'meta_keyword', 'meta_description', 'title', 'isactive', 'bnTitle'];

}
