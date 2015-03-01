<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleLanguages extends Model {

	protected $articleLanguages = "article_languages";
	protected $fillable = ['title', 'is_active', 'article_id', 'short_detail', 'details', 'language_id', 'meta_keyword', 'meta_description'];
	public function articles(){
		return $this->belongsTo('App\Models\Articles');
	}
}
