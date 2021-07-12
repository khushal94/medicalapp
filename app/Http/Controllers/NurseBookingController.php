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
            $date = date('y-m-d', $timestamp);
            $time = date('H:i:s', $timestamp);
    	$nursebooking = new NurseBooking;

        $nursebooking->nurse_id = $request->nurse_id;
        $nursebooking->patient_id = $request->patient_id;
        $nursebooking->visit_date = $date;
        $nursebooking->visit_time = $time;
        $nursebooking->address = $request->address;
        $nursebooking->save();

        return Redirect::route('nursebooking.all')->with('success', __('sentence.Nurse Booking Created Successfully'));

    }

    public function all(){
        $patients = Patient::join('users', 'patients.user_id', '=', 'users.id')->get(['patients.*', 'users.name']);
    	$nursebookings = NurseBooking::join('nurses', 'nursebooking.nurse_id', '=', 'nurses.id')->get(['nursebooking.*','nurses.name as nurse_name']);
    	return view('nursebooking.all', ['nursebookings' => $nursebookings, 'patients' => $patients]);
    }

    public function edit($id){
        $patients = Patient::join('users', 'patients.user_id', '=', 'users.id')->get(['patients.*', 'users.name']);
    	$nurses = Nurse::get();
        $nursebooking = NurseBooking::find($id);
        return view('nursebooking.edit',['nursebooking' => $nursebooking,'nurses'=> $nurses, 'patients' => $patients]);
    }

    public function store_edit(Request $request){
            
            $validatedData = $request->validate([
                'nurse_id' => 'required',
	        	'patient_id' => 'required',
                'visit_time' => 'required',
            ]);
            $newtimestamp = (strtotime($request->visit_time));
            $newdate = date('y-m-d', $newtimestamp);
            $newtime = date('H:i:s', $newtimestamp);
        
        $nursebooking = NurseBooking::find($request->id);

        $nursebooking->nurse_id = $request->nurse_id;
        $nursebooking->patient_id = $request->patient_id;
        $nursebooking->visit_date = $newdate;
        $nursebooking->visit_time = $newtime;
        $nursebooking->address = $request->address;
        // $nursebooking->visit_date = $request->visit_date;
        // $nursebooking->visit_time = $request->visit_time;
            // echo $nursebooking;
        $nursebooking->save();

        return Redirect::route('nursebooking.all')->with('success', __('sentence.Nurse Booking Edited Successfully'));

    }
    public function view($id){

    	// $coupon = Coupon::findOrfail($id);
        $patients = Patient::join('users', 'patients.user_id', '=', 'users.id')->get(['patients.*', 'users.name']);
    	$nursebooking = NurseBooking::findOrfail($id)->join('nurses', 'nursebooking.nurse_id', '=', 'nurses.id')->first(['nursebooking.*','nurses.name as nurse_name']);
    	return view('nursebooking.view', ['nursebooking' => $nursebooking, 'patients' => $patients]);

    }
    public function update($id, $status){
		if($status == 0){
			$nursebooking = NurseBooking::where('nurse_id', $id)->update(['status' => 1]);
			$activeStatus = 'Nurse Booking Inactive Successfully!';
		} else{
			$nursebooking = NurseBooking::where('nurse_id', $id)->update(['status' => 0]);
			$activeStatus = 'Nurse Booking Active Successfully';
		}
        return Redirect::route('nursebooking.all')->with('success', $activeStatus);

    }

    public function destroy($id){

    	NurseBooking::destroy($id);
        return Redirect::route('nursebooking.all')->with('success', __('sentence.Nurse Booking Deleted Successfully'));

    }
}
