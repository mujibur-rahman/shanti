<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Addresses extends Model {

	protected $addresses = "addresses";
	protected $fillable = ['location','thana_id', 'district_id', 'division_id', 'country_id', 'is_active'];

}
