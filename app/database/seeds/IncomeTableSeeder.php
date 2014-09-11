<?php

class IncomeTableSeeder extends Seeder
{

	public function run()
	{

		// income string
		$example_string = array('Salary', 'Freelance', 'Other', 'Part-Time', 'OutSource', 'Passive Income', 'Google Adwords');

		DB::table('Income')->delete();

		$begin = new DateTime( '2014-01-01' );
		$end = new DateTime( '2014-12-31' );

		$interval = DateInterval::createFromDateString('1 day');
		$period = new DatePeriod($begin, $interval, $end);

		foreach ( $period as $dt ){
			
			$string = $example_string[rand(0, sizeof($example_string) - 1)];

			Income::create(array(
				'user_id'     => 1,
				'title'       => $string,
				'description' => $string,
				'value'       => rand(100, 50000),
				'created_at'  => $dt->format( "Y-m-d H:i:s" ),
				'updated_at'  => $dt->format( "Y-m-d H:i:s" ),
			));
		}
		
	}

}

?>