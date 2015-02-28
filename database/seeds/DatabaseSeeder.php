<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role, App\User;
use App\Models\Language;
use App\Models\Countries;
class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');

		// Role::create([
		// 	'title' => 'Administrator',
		// 	'slug' => 'admin'
		// ]);

		// Role::create([
		// 	'title' => 'Moderator',
		// 	'slug' => 'moderate'
		// ]);

		// Role::create([
		// 	'title' => 'User',
		// 	'slug' => 'user'
		// ]);
		// Language::create([
		// 		'title' => 'Bengali',
		// 		'is_active' => 1
		// 	]);
		User::create([
			'name' => 'Mujibur Rahman',
			'email' => 'mujib.rahman.bd@gmail.com',
			'password' => Hash::make('123456'),
			'role_id' => 1
		]);
		
		// Language::create([
		// 		'title' => 'Swedish',
		// 		'is_active' => 1
		// 	]);
		// Countries::create([
		// 	'title' => 'Bangladesh',
		// 	'is_active' => 1,
		// 	'flag_image' => ''
 		// 	]);
	}

}
