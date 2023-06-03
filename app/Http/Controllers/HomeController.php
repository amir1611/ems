<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function indexUser()
	{
		return view('module1.userprofile');
	}

	public function indexStaff()
	{
		return view('module1.staff');
	}

	public function indexAdmin()
	{
		return view('module1.admin');
	}
}
