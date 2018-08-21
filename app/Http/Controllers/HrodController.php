<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HrodController extends Controller{
    
    public function __construct() {
		$this->middleware(['AuthenticateCheck','onlyHrod']);   	
	} 

    public function HrodDashboard(){
    	return view('userareas.hrod.HrodDashboard');
    }
}
