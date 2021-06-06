<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Nurse;
use App\Patient;
use App\NurseBooking;

class NurseBookingController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    
    public function create(){
        $nurses = Nurse::get();
        $patients = Patient::join('users', 'patients.user_id', '=', 'users.id')->get(['patients.*', 'users.name']);
    	return view('nursebooking.create', ['nurses'=> $nurses, 'patients' => $patients ]);
    }

    public function store(Request $request){

    		$validatedData = $request->validate([
	        	'nurse_id' => 'required',
	        	'patient_id' => 'required',
                'visit_time' => 'required',
            ]);
                // 'visit_date' => 'required',
            $timestamp = (strtotime($request->visit_time));
            $date = date('d-m-Y', $timestamp);
            $time = date('h:m:s a', $timestamp);
    	$nursebooking = new NurseBooking;

        $nursebooking->nurse_id = $request->nurse_id;
        $nursebooking->patient_id = $request->patient_id;
        $nursebooking->visit_date = $date;
        $nursebooking->visit_time = $time;
            
        $nursebooking->save();

        return Redirect::route('nursebooking.all')->with('success', __('sentence.Nurse Booking Created Successfully'));

    }

    public function all(){
    	$nursebookings = NurseBooking::all();
    	return view('nursebooking.all', ['nursebookings' => $nursebookings]);
    }

    public function edit($id){
        $nursebooking = NurseBooking::find($id);
        return view('nursebooking.edit',['nursebooking' => $nursebooking]);
    }

    public function store_edit(Request $request){
            
            $validatedData = $request->validate([
                'nurse_id' => 'required',
	        	'patient_id' => 'required',
                'visit_date' => 'required',
                'visit_time' => 'required',
            ]);
        
        $nursebooking = NurseBooking::find($request->id);

        $nursebooking->nurse_id = $request->nurse_id;
        $nursebooking->patient_id = $request->patient_id;
        $nursebooking->visit_date = $request->visit_date;
        $nursebooking->visit_time = $request->visit_time;

        $nursebooking->save();

        return Redirect::route('nursebooking.all')->with('success', __('sentence.Test Edited Successfully'));

    }

    public function destroy($id){

    	NurseBooking::destroy($id);
        return Redirect::route('nursebooking.all')->with('success', __('sentence.Test Deleted Successfully'));

    }
}
