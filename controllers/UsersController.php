<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Get all users from database
		$users = User::all();
		// Load View to list all users
		return View::make('users.index', compact('users'));
	}


	/**
	 * Show the form for creating a new resource.
	 *controller:make
	 * @return Response
	 */
	public function create()
	{
		$marital_status = array('Single', 'Divorced', 'Enagaged', 'Complicated', 'Married');
		return View::make('users.create', compact('marital_status'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		$dob = Input::get('dob');
		$datestring = Input::get('dob')['year'] .' - '. Input::get('dob')['month'] .' - '. Input::get('dob')['day'];
		
		// Merge new date string back to input
		Input::merge(['dob' => $datestring]);
		
		// Capture form data
		$payload = Input::all();
		
		// validate data and return errors if any
		$validator = Validator::make($payload, User::$rules);

		if($validator->passes())
		{
			$user =  User::create($payload);
			if($user)
			{
				return Redirect::route('users.show', array($user->id));
			}
		}
		else
		{
			// Redirect user back to the form 
			return Redirect::back()->withErrors($validator);
		}

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// Get user from database user id variable
   	$user = User::find($id);
   	// Load users show page with user object
    return View::make('users.show', compact('user'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
