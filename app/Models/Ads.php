<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model {

	protected $table = "ads";

	protected $fillable  = ['image', 'short_desc', 'details', 'start_date', 'end_date', 'link', 'meta_keyword', 'meta_description', 'is_paid', 'is_lifetime', 'is_pending', 'is_active',
		'ad_position_id', 'user_id'	];
	
	public function ad_position(){
		return $this->belongsTo('App\Models\AdPositions', 'ad_position_id', 'id')->whereIsActive(1);
	}
}
