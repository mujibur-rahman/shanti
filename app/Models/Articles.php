<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model {

	protected $table = "articles";

	protected $fillable = ['article_category_id','title', 'short_detail', 'details', 'is_active', 'address_id', 'meta_keyword', 'meta_description', 'website', 'phone', 'entrance', 
		'media', 'featured', 'featured_title', 'price', 'strike_price', 'featured_details',
		'more_from_dhaka', 'list_tag', 'editorChoice'
	];

	public function address(){
		return $this->belongsTo('App\Models\Addresses', 'address_id', 'id')
					->with('thana')->where('is_active', 1)
					->with('district')->where('is_active', 1)
					->with('division')->whereIs_active(1)
					->with('country')->whereIs_active(1);
	}
	public function article_category(){
		return $this->belongsTo('App\Models\ArticleCategory', 'article_category_id', 'id')
					->whereIsactive(1);
	}

	public function tags(){
		return $this->belongsToMany('App\Tag');
		//return $this->belongsToMany('App\Tag')->withTimestamps;
	}

	public function articletags(){
		return $this->belongsToMany('App\Models\ArticleTags');
		//return $this->belongsToMany('App\Tag')->withTimestamps;
	}

}

