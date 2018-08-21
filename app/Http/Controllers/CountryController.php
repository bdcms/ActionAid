<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function __construct() {
		$this->middleware(['AuthenticateCheck','onlyCountry']);   	
	}  

    public function CountryDashboard(){
    	return view('userareas.country.CountryDashboard');
    }
}
