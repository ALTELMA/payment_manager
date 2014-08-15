<?php

class UserController extends Controller{

	public function Index(){
		echo "USER INDEX";
	}
	
	public function login(){
		return View::make('user.login');
	}

	public function create(){
		echo "ADD USER";
	}

	public function update(){
		echo "UPDATE USER";
	}

	public function view($id){
		echo "VIEW USER : " . $id;
	}
}
?>