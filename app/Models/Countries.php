<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Countries extends Model {

	protected $country = "countries";
	public function division(){
		return $this->belongsTo('App\Models\Division');	
	}
}
