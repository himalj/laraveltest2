<?php
class UserController extends BaseController {

    /**
     * Authentication
     */
    public function actionLogin()
    {
		if((Input::has('email')) && (Input::has('password')) && (Input::get('email') == "himaljaya@yahoo.co.uk") && (Input::get('password') == "himal")){
			return Redirect::to('users/profile');	
		}
		else{
			//return View::make('user.profile', array('user' => $user));	
			return Redirect::to('users')->with('message', 'Login Failed');
		}
    }
	
	public function profile(){
		$events = Concert::all();
		return View::make('userprofile', array('events' => $events));	
	}

}