<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Session;
use DB;
class AdminController extends Controller{
	public function __construct() {
		$this->middleware(['AuthenticateCheck','onlyAdmin']);   	
	} 

    public function AdminDashboard(){ 
    	 return view('userareas.admin.AdminDashboard');
    }

    public function allUsers(){
    	$users['allUsers'] = DB::table('ai_users')
	    		->join('ai_role','ai_role.ro_id','=','ai_users.role_id') 
	    		->select('ai_users.*','ai_role.ro_name') 
	    		->orderBy('ai_users.us_id', 'desc')
	    		->get(); 
    	return view('userareas.admin.allUsers',$users);
    }

    public function newUser(){
    	return view('userareas.admin.newUser');
    }

    public function addUser(Request $request){
    	$this->validate($request,[
            'email'		=> 'required|email|unique:ai_users,us_email',  
            'password'	=> 'required',  
            'roleId'	=> 'required',
        ]); 

    	$data = [
    		'us_email'		=> $request->email,
    		'us_password'	=> md5($request->password),
    		'role_id'		=> $request->roleId,
    	];

    	$newUserId = DB::table('ai_users')->insertGetId($data);
    	
    		if($request->roleId == 8 || $request->roleId == 9) { //Project Coordinator || Regional MEL
		    	$userFlow = DB::table('ai_userflow')->where('userId',$request->lineManager)->first();
		    	$FlowData = [
		    		'userId'				=> $newUserId,
		    		'uf_hofspId'			=> $userFlow->uf_hofspId,
		    		'uf_hubCoordinatorId'	=> $userFlow->uf_hubCoordinatorId,
		    		'uf_hoppId'				=> $userFlow->uf_hoppId,
		    		'uf_lineManagerId'		=> $request->lineManager,
		    	]; 
		    }elseif($request->roleId == 6) { // Programe Officer
		        $userFlow = DB::table('ai_userflow')->where('userId',$request->hubCoordinator)->first();
		    	$FlowData = [
		    		'userId'				=> $newUserId,
		    		'uf_hofspId'			=> $userFlow->uf_hofspId,
		    		'uf_hubCoordinatorId'	=> $request->hubCoordinator,
		    		'uf_hoppId'				=> $userFlow->uf_hoppId,
		    		'uf_lineManagerId'		=> $userFlow->uf_lineManagerId,
		    	];  
		    }elseif($request->roleId == 7) { // Line Manager
		        $userFlow = DB::table('ai_userflow')->where('userId',$request->hopp)->first();
		    	$FlowData = [
		    		'userId'				=> $newUserId,
		    		'uf_hofspId'			=> $userFlow->uf_hofspId,
		    		'uf_hubCoordinatorId'	=> $userFlow->uf_hubCoordinatorId,
		    		'uf_hoppId'				=> $request->hopp,
		    		'uf_lineManagerId'		=> $userFlow->uf_lineManagerId,
		    	]; 
		    }elseif($request->roleId == 5) { // Hub Coordinator
		        $userFlow = DB::table('ai_userflow')->where('userId',$request->Hofsp)->first();
		    	$FlowData = [
		    		'userId'				=> $newUserId,
		    		'uf_hofspId'			=> $request->Hofsp,
		    		'uf_hubCoordinatorId'	=> $userFlow->uf_hubCoordinatorId,
		    		'uf_hoppId'				=> $userFlow->uf_hoppId,
		    		'uf_lineManagerId'		=> $userFlow->uf_lineManagerId,
		    	];
		    }else {
		        $FlowData = [
		    		'userId'				=> $newUserId,
		    		'uf_hofspId'			=> 0,
		    		'uf_hubCoordinatorId'	=> 0,
		    		'uf_hoppId'				=> 0,
		    		'uf_lineManagerId'		=> 0,
		    	];
		    }
		  

		$done = DB::table('ai_userflow')->insert($FlowData);
		if($done){
    		return Redirect('/allUsers')->with(['class' => 'success','msg'=>'User Added Successfully']); 
    	}else{
    		return Redirect('/allUsers')->with(['class' => 'danger','msg'=>'Something is not right!']); 
    	} 

    }

    public function activities_list(){
    	return view('activities.allactivities');
    } 

    public function userActive($id){
    	$done = DB::table('ai_users')->where('us_id',$id)->update(['status' => '0']);
    	if($done){
    		return Redirect('/allUsers')->with(['class' => 'success','msg'=>'User Update Successfully']); 
    	}else{
    		return Redirect('/allUsers')->with(['class' => 'danger','msg'=>'Something is not right!']); 
    	}
    }

    public function userUnactive($id){
    	$done = DB::table('ai_users')->where('us_id',$id)->update(['status' => '1']);
    	if($done){
    		return Redirect('/allUsers')->with(['class' => 'success','msg'=>'User Update Successfully']); 
    	}else{
    		return Redirect('/allUsers')->with(['class' => 'danger','msg'=>'Something is not right!']); 
    	}
    }

    //ajax action 
    public function ajax_status_active($id){
    	echo $id;
    	//$done = DB::
    }
}
