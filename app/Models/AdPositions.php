<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdPositions extends Model {

	protected $table = 'ad_positions';

	protected $fillable = ['title', 'type', 'details', 'duration', 'rate', 'maximum_ad_limit','is_active'];

}
