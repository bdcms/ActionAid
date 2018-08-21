<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HofspController extends Controller{
    
    public function __construct() {
		$this->middleware(['AuthenticateCheck','onlyHofsp']);   	
	} 

    public function HofspDashboard(){
    	return view('userareas.hofsp.HofspDashboard');
    }
}
