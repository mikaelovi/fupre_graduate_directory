<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class validateInput extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'fname'		=>	'required',
			'lname'		=>	'required',
			'h_addr'	=>	'required',
			'phone'		=>	'required',
			'email'		=>	'required|email',
			'mat_no'	=>	'required|unique:graduates',
			'college'	=>	'required|in:Science,Technology',
			'dept'		=>	'required|in:Physics,Chemistry,Industrial-Chemistry,Earth-Sciences-Geology,Earth-Sciences-Geophysics,Mathematics-Computer-Science,Environmental-Science,Mechanical-Engineering,Chemical-Engineering,Petroleum-Engineering,Electrical-Engineering,Marine-Engineering',
			'set'		=>	'required|in:2008,2009,2010,2011',
			'grad'		=>	'required|in:2010-2011,2011-2012,2012-2013,2013-2014',
			'photo'		=>	'sometimes|image|mimes:jpeg,png|min:1|max:1000',
		];
	}

	public function messages() {
		return [
			'mat_no.unique' => 'This record already exists'
		];
	}
}
