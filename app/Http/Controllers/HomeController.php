<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


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
        if(Auth::User()->role == 1) {
            return redirect()->route('admin.index');
        }
        elseif(Auth::User()->role == 2){
            return redirect()->route('kepbag.index');
        }
        return redirect()->route('peg.index');

	}

}
