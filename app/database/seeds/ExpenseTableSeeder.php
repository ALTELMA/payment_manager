<?php

class ExpenseTableSeeder extends Seeder
{

	public function run()
	{

		// income string
		$example_string = array('House Rent', 'Shuttle', 'Food', 'Medical', 'Phone Bill', 'Shopping', 'Other');

		DB::table('Expense')->delete();

		for($i = 0;$i <= 31;$i++){

			$string = $example_string[rand(0, sizeof($example_string) - 1)];

			Expense::create(array(
			'title'       => $string,
			'description' => $string,
			'value'       => rand(100, 50000),
			'created_at'  => new DateTime('2014-01-01'),
			'updated_at'  => new DateTime('2014-01-01'),
			));
		}
		
	}

}

?>