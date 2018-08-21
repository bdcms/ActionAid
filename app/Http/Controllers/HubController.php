<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HubController extends Controller{
    public function __construct() {
		$this->middleware(['AuthenticateCheck','onlyHub']);   	
	} 

    public function HubDashboard(){
    	return view('userareas.hub coordinator.HubDashboard');
    }
}
