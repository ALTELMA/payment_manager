<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('IncomeTableSeeder');
		$this->call('ExpenseTableSeeder');
		$this->call('CategoryTableSeeder');
	}

}