<?php

use Illuminate\Database\Seeder;

class OAuthUsersSeeder extends Seeder
{
	public function run()
	{
		DB::table('oauth_users')->insert(array(
			'username' => "bshaffer",
			'password' => bcrypt("brent123"),
			'first_name' => "Brent",
			'last_name' => "Shaffer",
		));
	}
}
