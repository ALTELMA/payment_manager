<?php

/**
* 
*/

class CategoryTableSeeder extends Seeder
{
	
	public function run(){

		DB::table('category')->delete();

		Category::create(array(
			'name' => 'Salary',
		));

		Category::create(array(
			'name' => 'Freelance',
		));

		Category::create(array(
			'name' => 'Home Rent',
		));

		Category::create(array(
			'name' => 'Transport',
		));

		Category::create(array(
			'name' => 'Food',
		));
	}
}
?>