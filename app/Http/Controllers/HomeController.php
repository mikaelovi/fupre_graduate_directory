<?php namespace App\Http\Controllers;

use App\Graduate;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$all = Graduate::all();
		$science = [
						'Physics',
						'Chemistry',
						'Industrial-Chemistry', 
						'Earth-Sciences-Geology', 
						'Earth-Sciences-Geophysics', 
						'Mathematics-Computer-Science',
						'Environmental-Science'
					];

		$tech = [
					'Mechanical-Engineering',
					'Chemical-Engineering',
					'Petroleum-Engineering',
					'Electrical-Engineering',
					'Marine-Engineering'
				];

		$scienceDeptGrads = array();

		foreach ($science as $sc) {
			$scienceDeptGrads[] = Graduate::where('department','=',$sc)->count();
		}
		$totalScience = 0;
		foreach ($scienceDeptGrads as $sdp) {
			$totalScience += $sdp;
		}

		$techDeptGrads = array();

		foreach ($tech as $tc) {
			$techDeptGrads[] = Graduate::where('department', '=', $tc)->count();
		}

		$totalTech = 0;
		foreach ($techDeptGrads as $tdp) {
			$totalScience += $tdp;
		}

		$scienceCount = count($science);
		$techCount = count($tech);

		return view('home', 
			[
				'all'=> $all,
				'science' => $science,
				'scienceDeptGrads' => $scienceDeptGrads,
				'totalScience' => $totalScience,
				'tech' => $tech,
				'techDeptGrads' => $techDeptGrads,
				'totalTech' => $totalTech,
				'scienceCount' => $scienceCount,
				'techCount' => $techCount
			]);
	}

}
