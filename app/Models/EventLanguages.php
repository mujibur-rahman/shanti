<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventLanguages extends Model {

	protected $table = "event_languages";

	protected $fillable = ['title', 'is_active', 'event_id', 'info_title', 'details', 'language_id', 'meta_keyword', 'meta_description'];

	public function events(){
		return $this->belongsTo('App\Models\Events');
	}
}
