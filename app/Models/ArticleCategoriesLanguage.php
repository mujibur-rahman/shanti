<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleCategoriesLanguage extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	*/
	protected $table = "article_categories_language";
	/**
	 * One to One relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\belongsTo
	*/
	public function languages(){
		return $this->belongsTo('App\Languages');		
	}

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['page_view_count', 'meta_keyword', 'meta_description', 'title', 'isactive', 'article_category_id', 'language_id'];
}
