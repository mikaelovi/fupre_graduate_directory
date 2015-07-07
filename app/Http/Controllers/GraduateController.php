<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\validateInput;
use App\Http\Controllers\Controller;
use Validator, Input, Redirect;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\Graduate;

class GraduateController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(validateInput $request)
	{
		$fname = Input::get('fname');
		$lname = Input::get('lname');
		$addr  = Input::get('h_addr');
		$phone = Input::get('phone');
		$email = Input::get('email');
		$mat   = Input::get('mat_no');
		$coll  = Input::get('college');
		$dept  = Input::get('dept');
		$set   = Input::get('set');
		$grad  = Input::get('grad');


			if (Input::hasFile('photo')) {
			    $photo = Input::file('photo');
			
			    $destinationPath = 'avatars/'; // upload path
			    $fileName = str_random(6).'.'.$photo->getClientOriginalName(); // renaming photo
			    $photo->move($destinationPath, $fileName); // uploading file to given path

			    $photoPath = $destinationPath . $fileName;

			    // Resize the image to 64 X 64 pixels
			    $img = Image::make($photoPath);
			    $img->resize(64, 64);
			    $img->save($photoPath);

			    //save the data to database
			    $createNewGradProfile = Graduate::firstOrCreate(array(
			        'first_name'			=>	$fname,
			        'last_name'				=>	$lname,		
			        'home_address'			=>	$addr,
			        'phone_no'				=>	$phone,
			        'email'					=>	$email,
			        'mat_no'				=>	$mat,
			        'college'				=>	$coll,
			        'department'			=>	$dept,
			        'set'					=>	$set,
			        'graduation_session'	=>	$grad,
			        'photo'					=>	$photoPath
			    ));

			    if ($createNewGradProfile) {
			     return redirect()->route('show-form')
			      ->with('global', 'Your details have been saved successfully, Thank you');                  
			    }
			     
			} else {
		            // save a default photo
		            $photo_default = 'avatars/defaults/default_avatar_1.png';
		           $createNewGradProfile = Graduate::firstOrCreate(array(
		               'first_name'				=>	$fname,
		               'last_name'				=>	$lname,		
		               'home_address'			=>	$addr,
		               'phone_no'				=>	$phone,
		               'email'					=>	$email,
		               'mat_no'					=>	$mat,
		               'college'				=>	$coll,
		               'department'				=>	$dept,
		               'set'					=>	$set,
		               'graduation_session'		=>	$grad,
		               'photo'					=>	$photoPath
		           ));

		           if ($createNewGradProfile) {
		            return redirect()->route('show-form')
		             ->with('global', 'Your details have been saved successfully, Thank you');                  
		           }
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
		//
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
