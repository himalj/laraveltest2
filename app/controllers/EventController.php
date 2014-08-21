<?php
class EventController extends BaseController {

    /**
     * Authentication
     */
    public function actionAdd()
    {
		if((Input::has('email')) && (Input::has('title')) && (Input::get('email') != "") && (Input::get('title') != "")){
			$concert = new Concert;
			$concert->email = Input::get('email');
			$concert->title = Input::get('title');
			$concert->save();
			return Redirect::to('users/profile');	
		}
		else{
			return Redirect::to('users/profile')->with('message', 'Please fill both fields');
		}
    }
	
	public function getJson(){
		$events = Concert::all();
		return Response::json(array(
			'error' => false,
			'events' => $events->toArray()),
			200
		);
	}

}