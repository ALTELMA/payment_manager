<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'     => 'ALTELMA D SHARK',
			'username' => 'altelma',
			'email'    => 'phongthorn.a@gmail.com',
			'password' => Hash::make('111111'),
		));
	}

}