<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// load the create form (app/views/users/create.blade.php)
		return View::make('users.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// load the create form (app/views/users/create.blade.php)
		return View::make('users.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// validate
		$rules = array(
			'username' => 'required',
			'password' => 'required|min:6',
			'email'    => 'required|email|unique:users',
			);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()){

			return Redirect::to('user/register')
			->withErrors($validator)
			->withInput(Input::except('password'));
		}else{

			$user = new user;
			$user->username = Input::get('username');
			$user->password = Hash::make(Input::get('password'));
			$user->email    = Input::get('email');
			$user->save();

			// redirect
			Session::flash('message', 'Successfully register!');
			return Redirect::to('user');
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

	/**
	 * Show login page.
	 *
	 * @return Response
	 */
	public function showLogin()
	{

		if(Auth::check()){
			return Redirect::to('user');
		}

		return View::make('users.login');
	}

	/**
	 * Login process from input.
	 *
	 * @return Response
	 */
	public function doLogin()
	{

		$rules = array(
			'username' => 'required',
			'password' => 'required|min:3'
			);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()){
			return Redirect::to('/')
				->withErrors($validator)
				->withInput(Input::except('password'));
		}else{
			$userdata = array(
				'username' 	=> Input::get('username'),
				'password' 	=> Input::get('password')
				);

			if(Auth::attempt($userdata)){
				return Redirect::to('/user'); // redirect to index
			}else{
				return Redirect::to('/'); // redirect to login
			}
		}
	}

	/**
	 * Logout
	 *
	 * @return Response
	 */
	public function doLogout()
	{
		Auth::Logout();
		return Redirect::to('/');
	}

}
