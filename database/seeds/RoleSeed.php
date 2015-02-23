<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
class RoleSeed extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		Role::create([
			'title' => 'Administrator',
			'slug' => 'admin'
		]);

		Role::create([
			'title' => 'Moderator',
			'slug' => 'moderate'
		]);

		Role::create([
			'title' => 'User',
			'slug' => 'user'
		]);
	}

}
