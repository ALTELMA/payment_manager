<?php

class IncomeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//Get all income
		$incomes = Income::all();

		// Get Total Value
		$totalValue = Income::sum('value');

		// Load data send pass view
		return View::make('income.index')
			->with('incomes', $incomes)
			->with('totalValue', $totalValue);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('income.form');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$rules = array(
			'title'       => 'required',
			'description' => 'required',
			'value'       => 'required|numeric'
		);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()){
			return Redirect::to('income/create')
				->withErrors($validator);
		}else{
			
			$income = new Income;
			$income->title       = Input::get('title');
			$income->description = Input::get('description');
			$income->value       = Input::get('value');
			$income->save();

			// redirect
			Session::flash('message', 'Success! Income Add');
			return Redirect::to('income');
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
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}