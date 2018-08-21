<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Session;
class AdminController extends Controller{
	public function __construct() {
		$this->middleware(['AuthenticateCheck','onlyAdmin']);   	
	} 

    public function AdminDashboard(){ 
    	 return view('userareas.admin.AdminDashboard');
    }

    public function activities_list(){
    	return view('activities.allactivities');
    } 
}
