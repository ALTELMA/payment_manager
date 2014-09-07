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
		$income_report = Income::select(
			DB::raw('DATE_FORMAT(income.created_at, \'%M\') as month'), 
			DB::raw('SUM(income.value) AS total_income'), 
			DB::raw('SUM(expense.value) AS total_expense'))
			->leftJoin('expense', 'income.user_id', '=', 'expense.user_id')
			->groupBy(DB::raw('Month(income.created_at)'))
			->get();

		foreach($income_report as $key => $value){
			$report_label[] = $value->month;
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