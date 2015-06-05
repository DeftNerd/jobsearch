<?php namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Job as Job;

/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class FrontendController extends Controller {

	/**
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		$jobs = Job::orderBy('created_at', 'desc')->get();
		return view('frontend.index', ['jobs' => $jobs]);
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function macros()
	{
		return view('frontend.macros');
	}
}
