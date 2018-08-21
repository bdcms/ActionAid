<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MelController extends Controller{
   
    public function __construct() {
		$this->middleware(['AuthenticateCheck','onlyMel']);   	
	} 

    public function MelDashboard(){
    	return view('userareas.regional mel.MelDashboard');
    }
}
