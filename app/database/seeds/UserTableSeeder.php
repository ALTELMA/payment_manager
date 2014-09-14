<?php

/**
* 
*/

class UserTableSeeder extends Seeder
{
	
	public function run(){

		DB::table('users')->delete();

		User::create(array(
			'username' => 'ALTELMA',
			'password' => Hash::make('123456'),
			'email'    => 'phongthorn.a@gmail.com'
		));
	}
}
?>