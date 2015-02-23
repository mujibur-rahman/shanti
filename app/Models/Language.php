<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	*/
	protected $table = "languages";

	/**
	 * One to Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\hasMany
	*/
	public function article_categories(){
		return $this->hasMany('App\ArticleCategoriesLanguage');		
	}

}
