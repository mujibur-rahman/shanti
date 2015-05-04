<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FooterSliders extends Model {

	protected $table ="footer_sliders";
	
	protected $fillable  = ['image', 'title', 'is_active'];

}
