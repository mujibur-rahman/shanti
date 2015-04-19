<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	*/
	protected $table = "tags";
	protected $fillable = ['tag', 'tagBengali'];

	// public function articles(){
	// 	return $this->belongsToMany('App\Articles');
	// }

}
