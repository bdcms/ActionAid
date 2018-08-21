<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProfileController extends Controller{

    public function __construct() {
		$this->middleware('AuthenticateCheck');   	
	} 

	public function getProfile(){
		$getUser['getUser'] = DB::table('ai_users')->where('us_id' , session('userId'))->first(); 
		return view('userareas.profile',$getUser);
	}

	public function updateProfile(Request $request){  
		if(session('userEmail') != $request->email){
	    	$this->validate($request,[ 
	            'FullName' 		=> 'required',
	            'email' 		=> 'required|email|unique:ai_users,us_email',    
	            'contact'		=> 'required|numeric',
	            'Location'		=> 'required', 
	        ]);
	    }else{
	    	$this->validate($request,[ 
	            'FullName' 		=> 'required',
	            'email' 		=> 'required|email',    
	            'contact'		=> 'required|numeric',
	            'Location'		=> 'required', 
	        ]);
	    }

	    $data = [
	    	'us_fullName'	=> $request->FullName,
	    	'us_email'		=> $request->email,
	    	'us_mobile'		=> $request->contact,
	    	'us_location'	=> $request->Location, 
	    ];

	    if(!empty($request->password)){
	    	$data['us_password'] = md5($request->password);
	    }
 
	     if ($request->hasFile('profile_img') && $request->profile_img->isValid()) {
	        $file = $request->file('profile_img');
	         $imagePath = $request->profile_img->store('');
	         $imagePath = '/Admin/images/users/'.$imagePath; 
	         $data['us_profileImg'] = $imagePath;
	    
	        $request->profile_img->move(public_path('Admin/images/users/'),$imagePath);

	        $dd = explode('users/',$request->old_img);
	        if($dd[1] != 'default.png'){
	        	unlink('Admin/images/users/'.$dd[1]);
	        }
	    }else{
	        $data['us_profileImg'] = $request->old_img;
	    }

	    $done = DB::table('ai_users')->where('us_id', session('userId'))->update($data); 
	    
	    if($done){
	    	return Redirect('/getProfile')->with(['class' => 'success','msg'=>'Your profile is updated!']); 
	    }else{
	    	return Redirect('/getProfile')->with(['class' => 'danger','msg'=>'Something is not right!']); 
	    } 
		    
	}
}
