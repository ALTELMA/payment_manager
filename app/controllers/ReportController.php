<?php
/**
* Report
*/

class ReportController extends \BaseController{
	
	public function index(){

		$report_label = array();
		$report_income_data = array();
		$report_expense_data = array();

		// Get income report data
		$income_report = DB::table(
			DB::raw("(SELECT SUM(income.value) as total_income, MONTH(income.created_at) as iMonth, DATE_FORMAT(income.created_at,'%M') as labelMonth FROM income GROUP BY iMonth) AS t_income"))
			->leftJoin(DB::raw("(SELECT SUM(expense.value) as total_expense, MONTH(expense.created_at) as eMonth FROM expense GROUP BY eMonth) AS t_expense"), 't_income.iMonth', '=', 't_expense.eMonth')
			->get();
        
		foreach($income_report as $key => $value){
			$report_label[] = $value->labelMonth;
			$report_income_data[] = $value->total_income;
			$report_expense_data[] = $value->total_expense;
		}
		
		return View::make('report.index')
			->with('income_report', $income_report)
			->with('report_label', json_encode($report_label))
			->with('report_income_data', json_encode($report_income_data))
			->with('report_expense_data', json_encode($report_expense_data));
	}
}
?>