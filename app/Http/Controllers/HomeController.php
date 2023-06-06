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
		return view('manageProfile.userprofile');
	}

	public function indexStaff()
	{
		return view('manageProfile.staff');
	}

	public function indexAdmin()
	{
		return view('manageProfile.admin');
	}
}
