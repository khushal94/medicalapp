<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use App\User;
use App\ReviewRating;
use App\Setting;
use Redirect;
class ReviewRatingController extends Controller
{

	public function __construct(){
        $this->middleware('auth');
    }

	public function all(){
		$reviewrating = ReviewRating::all();

		return view('reviewrating.all', ['reviewrating' => $reviewrating]);
	}


}
