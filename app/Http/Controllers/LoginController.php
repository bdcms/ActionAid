<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class LoginController extends Controller
{

	public function index(){
		if(session()->get('userId') != '') {
        	return redirect()->back();
        }else{
    		return view('login');
    	}
    }

    public function checkAuth(Request $request){
    	$this->validate($request,[
            'email'		=> 'required|email|exists:ai_users,us_email',  
            'password'	=> 'required',  
        ]); 

        $user = DB::table('ai_users')
                ->where('us_email',$request->email)
                ->where('us_password',md5($request->password))
                ->where('status',1)
        		->join('ai_role','ai_role.ro_id','=','ai_users.role_id') 
        		->select('ai_users.*','ai_role.ro_name','ai_role.ro_id') 
        		->first(); 

        if($user){
         	session()->put('userId',$user->us_id); 
        	session()->put('userName',$user->us_fullName); 
        	session()->put('userEmail',$user->us_email); 
            session()->put('userRole',$user->ro_name);  
        	session()->put('roleId',$user->ro_id);  

        	switch ($user->ro_id) {
			    case "1": //Admin panel
			    	return Redirect('AdminDashboard/');  

			    case "2": // Country Director Panel
			        return Redirect('CountryDashboard/');  

			    case "3": // HROD Panel
			        return Redirect('HrodDashboard/');

			    case "4": // HOFSP Panel
			        return Redirect('HofspDashboard/');

			    case "5": // Hub Coordinator Panel
			        return Redirect('HubDashboard/');

			    case "6": // Programe Officer Panel
			        return Redirect('ProgramDashboard/');

			    case "7": // Line Manager Panel
			        return Redirect('LineDashboard/');

			    case "8": // Project Coordinator Panel
			        return Redirect('ProjectDashboard/');

			    case "9": // Regional MEL Panel
			        return Redirect('MelDashboard/');

			    case "10": // Finance Officer Panel
			        return Redirect('FinanceDashboard/'); 

                case "11": // Hopp panel
                    return Redirect('HoppDashboard/'); 

			    default:
			        return Redirect('/')->with(['class' => 'danger','msg'=>'Something is not right!']);
			} 
        }else{ 
            return Redirect('/')->with(['class' => 'danger','msg'=>'Your password is not correct!']); 
        }
          
    } 


    public function logout(){
        session()->forget(['userId','userName','userEmail','userRole']);
        return Redirect('/')->with(['class' => 'success','msg'=>'Thank you!. You are loged out.']); 
	}

}
