<?php

class IncomeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//get all income
		$incomes = Income::all();

		// load the view and pass the income
		return View::make('income.index')
			->with('incomes', $incomes);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// load the create form (app/views/nerds/create.blade.php)
		return View::make('income.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'name'     => 'required',
			'category' => 'required|numeric',
			'value'    => 'required|numeric'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('income/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$income              = new Income;
			$income->name        = Input::get('name');
			$income->category_id = Input::get('category');
			$income->value       = Input::get('value');
			$income->save();

			// redirect
			Session::flash('message', 'Successfully add Income!');
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
		// get the nerd
		$income = Income::find($id);

		// show the view and pass the nerd to it
		return View::make('income.show')
			->with('income', $income);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the nerd
		$income = Income::find($id);

		// show the edit form and pass the nerd
		return View::make('income.edit')
			->with('income', $income);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
			'name'     => 'required',
			'category' => 'required|numeric',
			'value'    => 'required|numeric'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('income/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$income = Income::find($id);
			$income->name        = Input::get('name');
			$income->category_id = Input::get('category');
			$income->value       = Input::get('value');
			$income->save();

			// redirect
			Session::flash('message', 'Successfully Edit Income!');
			return Redirect::to('income');
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
		// delete
		$income = Income::find($id);
		$income->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the income!');
		return Redirect::to('income');
	}


}
