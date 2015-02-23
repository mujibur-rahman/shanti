<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Divisions extends Model {

	protected $division = "divisions";

	public function country(){
		return $this->hasMany('App\Models\Country');	
	}

}
