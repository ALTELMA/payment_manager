<?php
/**
* Report
*/

class ReportController extends \BaseController{
	
	public function index(){

		$income_report = Income::select(DB::raw('DATE_FORMAT(created_at, \'%M\') as month'),'title','value')
			->groupBy(DB::raw('Month(created_at)'))
			->get();

		return View::make('report.index')->with('income_report', $income_report);
	}
}
?>