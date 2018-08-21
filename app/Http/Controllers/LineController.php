<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LineController extends Controller{
    
    public function __construct() {
		$this->middleware(['AuthenticateCheck','onlyLine']);   	
	} 

    public function LineDashboard(){
    	return view('userareas.line manager.LineDashboard');
    }
}
