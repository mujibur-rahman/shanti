<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model {

	protected $article = "articles";

	public $fillable = ['article_category_id','title', 'short_detail', 'details', 'is_active', 'address_id'];

}
