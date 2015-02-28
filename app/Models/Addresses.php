<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Addresses extends Model {

	protected $table = "addresses";
	protected $fillable = ['location','thana_id', 'district_id', 'division_id', 'country_id', 'is_active'];

	public function country(){
		return $this->belongsTo('App\Models\Countries', 'country_id', 'id');
	}
	public function division(){
		return $this->belongsTo('App\Models\Divisions', 'division_id', 'id');
	}
	public function district(){
		return $this->belongsTo('App\Models\Districts', 'district_id', 'id');
	}
	public function thana(){
		return $this->belongsTo('App\Models\Thanas', 'thana_id', 'id');
	}
}
