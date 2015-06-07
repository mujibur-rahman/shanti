<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Events extends Model {

	protected $table = "events";
	protected $fillable = ['article_category_id','title', 'info_title', 'details', 'is_active', 'address_id', 'meta_keyword', 'meta_description', 'website', 'phone', 'entrance', 'entrance_fees', 'opening_date', 'ending_date',
		'media', 'last_minute', 'featured', 'featured_title', 'price', 'strike_price',
		'featured_details','bnTitle','bnInfo_title', 'bnDetails','bn_featured_title', 'bn_price', 'bn_strike_price', 'bn_featured_details'
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

}
