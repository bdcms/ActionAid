<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller{
    
    public function __construct() {
		$this->middleware(['AuthenticateCheck','onlyProgram']);   	
	} 

    public function ProgramDashboard(){
    	return view('userareas.program officer.ProgramDashboard');
    }
}
