<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
	public function __construct()
	{

	}

	public function login()
	{

	}

	public function index()
	{
		return view('admin.index');
	}
}