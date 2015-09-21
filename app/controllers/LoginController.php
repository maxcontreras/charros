<?php

class LoginController extends BaseController {

	public function index(){
		return View::make('layout.login');
	}

	public function login()
	{
		if(Auth::attempt(array('email'=>Input::get('email'),'password'=>Input::get('password'), 'active' => 1))){
			return Redirect::to('/admin-home');
		}else{
			return Redirect::to('/login')
			->with('mensaje','El usuario y/o password no existen');
		}
	}

	public function adminHome()
	{
		return View::make('cms.cms');
	}
}