<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index()
    {
    	$data = "E-Meeting is system that provide user place to field in all information about meeting data";
    	return view('welcome.index')->with('data',$data);
    }
}
