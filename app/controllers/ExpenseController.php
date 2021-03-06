<?php

class ExpenseController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Get all expenses
		/*
		$expenses = Expense::select('id', DB::raw('SUM(value) AS total_value'),'created_at')
			->where(DB::raw('WEEKOFYEAR(created_at)'), '=', DB::raw('WEEKOFYEAR(NOW())'))
			->groupBY(DB::raw('DAY(created_at)'))
			->get();
		*/
		
		$expenses = Expense::where('created_at', '>=', DB::raw('CURDATE()'))
			->orderBy('id', 'DESC')
			->get();

		$totalValue = $expenses->sum('value');

		return View::make('expense.index')
			->with('expenses', $expenses)
			->with('totalValue', $totalValue);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// Show form to add expense.
		return View::make('expense.form');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// Validator Rules
		$rules = array(
			'title'    => 'required',
			'category' => 'required',
			'value'    => 'required|numeric'
		);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()){
			return Redirect::to('expense/create')->withErrors($validator);
		}else{

			$expense             = new Expense;
			$expense->title      = Input::get('title');
			$expense->user_id     = Auth::user()->id;
			$expense->category_id = Input::get('category');
			$expense->value      = Input::get('value');
			$expense->save();

			return Redirect::to('expense');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// Get expense data.
		$expense = Expense::find($id);

		return View::make('expense.form')->with('expense', $expense);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// Validator Rules
		$rules = array(
			'title'    => 'required',
			'category' => 'required',
			'value'    => 'required|numeric'
		);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()){
			return Redirect::to('expense/create')->withErrors($validator);
		}else{

			$expense             = Expense::file($id);
			$expense->title      = Input::get('title');
			$expense->user_id     = Auth::user()->id;
			$expense->category_id = Input::get('category');
			$expense->value      = Input::get('value');
			$expense->save();

			return Redirect::to('expense');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// Delete expense data.
		$expense = Expense::find($id);
		$expense->delete();

		return Redirect::to('expense');
	}


}
