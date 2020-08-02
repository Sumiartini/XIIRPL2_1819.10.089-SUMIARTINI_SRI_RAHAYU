<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\example;
class Cpbo extends Controller
{
	function index(){
		$a = example::all();
		return view ('daftar',compact ('a'));
	}    
}
