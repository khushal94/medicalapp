<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use App\User;
use App\Rating;
use App\Setting;
use Redirect;
class ReviewRatingController extends Controller
{

	public function __construct(){
        $this->middleware('auth');
    }

	public function all(){
		$ratings = Rating::all();

		return view('rating.all', ['ratings' => $ratings]);
	}

	public function update($id, $status){

        if($status == 0){
			$rating = Rating::where('id', $id)->update(['is_deleted' => 1]);
			$activeStatus = 'Rating Deleted Successfully!';
		} else{
			$rating = Rating::where('id', $id)->update(['is_deleted' => 0]);
			$activeStatus = 'Rating Added Successfully';
		}
        return Redirect::route('rating.all')->with('success', $activeStatus);

    }

}
