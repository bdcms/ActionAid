<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HoppController extends Controller{

    public function __construct() {
		$this->middleware(['AuthenticateCheck','onlyHopp']);   	
	} 

    public function HoppDashboard(){
    	return view('userareas.hopp.HoppDashboard');
    }
}
