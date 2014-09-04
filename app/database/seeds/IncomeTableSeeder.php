<?php

class IncomeTableSeeder extends Seeder
{

	public function run()
	{

		// income string
		$start = mktime(0,0,0,1,1,2014);
		$example_string = array('Salary', 'Freelance', 'Other', 'Part-Time', 'OutSource', 'Passive Income', 'Google Adwords');

		DB::table('Income')->delete();

		for($i = 0;$i <= 31;$i++){

			$string = $example_string[rand(0, sizeof($example_string) - 1)];

			Income::create(array(
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