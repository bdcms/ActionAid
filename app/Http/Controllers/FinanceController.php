<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function __construct() {
		$this->middleware(['AuthenticateCheck','onlyFinance']);   	
	}  

    public function FinanceDashboard(){
    	return view('userareas.finance officer.FinanceDashboard');
    }
}
