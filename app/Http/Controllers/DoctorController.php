<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Doctor;
use App\Speciality;
use Hash;
use Redirect;
use Illuminate\Validation\Rule;

class DoctorController extends Controller
{

	public function __construct(){
        $this->middleware('auth');
    }


    public function all(){

    	$doctors = Doctor::get();
		// $doctors = User::where('role', 'doctor')->get();


    	return view('doctor.all', ['doctors' => $doctors]);

    }

    public function create(){
    	$speciality = Speciality::get();
		return view('doctor.create', ['specialities' => $speciality]);
    }
    public function edit($id){
		$doctor = User::find($id);
    	$speciality = Speciality::get();
    	return view('doctor.edit',['doctor' => $doctor, 'specialities' => $speciality]);
    }
	
	public function store_edit(Request $request){

		$validatedData = $request->validate([
			'name' => ['required', 'string', 'max:255'],
			'email' => [
				'required', 'email', 'max:255',
				Rule::unique('users')->ignore($request->user_id),
			],
			'birthday' => ['required'],
			'gender' => ['required'],
			'phone' => ['required'],
			'address' => ['required'],
			'city' => ['required'],
			'state' => ['required'],
			'speciality' => ['required'],
			'experience' => ['required'],
			'registration' => ['required'],
			'qualification' => ['required'],
		]);
		
		if ($request->hasFile('image')) {
			$validatedData = $request->validate([
				'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			]);
			if(!empty($request->image) && file_exists(public_path().'/imgs/doctors/'.strtolower(now()->monthName).'/'.$request->image)) {
				unlink(public_path().'/imgs/doctors/'.strtolower(now()->monthName).'/'.$request->image);
			}
			$image           = $request->file('image');
			$name            = 'IMG'.$request->user_id.'.'.$image->getClientOriginalExtension();
			$destinationPath = '/imgs/doctors/'.strtolower(now()->monthName);			
			// var_dump($name);
			$image->move(public_path($destinationPath), $name);
			$doctor = Doctor::where('user_id', $request->user_id)->update(['image' => 'doctors/'.strtolower(now()->monthName).'/'.$name]);			
		} 
		$user = User::find($request->user_id);
		$user->email = $request->email;
		$user->name = $request->name;
		$user->role = 'doctor';
		$user->update();
		// $days = [
		// 	'Monday',
		// 	'Tuesday',
		// 	'Wednesday',
		// 	'Thrusday',
		// 	'Friday',
		// 	'Saturday',
		// 	'Sunday'
		// ];
		// $available = [
		// 		"day"=> $days,
		// 		"status"=> $request->status,
		// 		"start_time"=> $request->start_time,
		// 		"end_time"=> $request->end_time,			
		// ];		
		$doctor = Doctor::where('user_id', $request->user_id)
			->update(['birthday' => $request->birthday,
				'phone' => $request->phone,
				'name' => $request->name,
				'email' => $request->email,
				'gender' => $request->gender,
				'address' => $request->address,
				'city' => $request->city,
				'state' => $request->state,
				'description' => $request->description,
				'lat' => $request->lat,
				'long' => $request->long,
				'speciality' => $request->speciality,
				'experience' => $request->experience,
				'registration' => $request->registration,
				'qualification' => $request->qualification,
				]);
		return Redirect::back()->with('success', __('sentence.Doctor Updated Successfully'));

    }

    public function store(Request $request){
		
		$validatedData = $request->validate([
			'name' => ['required', 'string', 'max:255'],
			'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
			'birthday' => ['required'],
			'gender' => ['required'],
			'phone' => ['required'],
			'address' => ['required'],
			'city' => ['required'],
			'state' => ['required'],
			'speciality' => ['required'],
			'experience' => ['required'],
			'registration' => ['required'],
			'qualification' => ['required'],
			
		]);
		$user = new User();
		$user->password = Hash::make('udaipurmed');
		$user->email = $request->email;
		$user->name = $request->name;
		$user->role = 'doctor';
		$user->save();
		if ($request->hasFile('image')) {
			$validatedData = $request->validate([
				'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			]);
			$image           = $request->file('image');
			$name            = 'IMG'.time().'.'.$image->getClientOriginalExtension();
			$destinationPath = '/imgs/doctors/'.strtolower(now()->monthName);
			$image->move(public_path($destinationPath), $name);
			$doctor->image = 'doctors/'.strtolower(now()->monthName).'/'.$name;			
		}

		$doctor = new Doctor();
		$doctor->user_id = $user->id;
		$doctor->name = $request->name;
		$doctor->email = $request->email;
		$doctor->birthday = $request->birthday;
		$doctor->phone = $request->phone;
		$doctor->gender = $request->gender;
		$doctor->address = $request->address;
		$doctor->city = $request->city;
		$doctor->state = $request->state;
		$doctor->country = 'India';
		$doctor->speciality = $request->speciality;
		$doctor->experience = $request->experience;
		$doctor->description = $request->description;
		$doctor->lat = $request->lat;
		$doctor->long = $request->long;
		$doctor->registration = $request->registration;
		$doctor->qualification = $request->qualification;
		// $days = [
		// 	'Monday',
		// 	'Tuesday',
		// 	'Wednesday',
		// 	'Thrusday',
		// 	'Friday',
		// 	'Saturday',
		// 	'Sunday'
		// ];
		// $available = [
		// 		"day"=> $days,
		// 		"status"=> $request->status,
		// 		"start_time"=> $request->start_time,
		// 		"end_time"=> $request->end_time,			
		// ];
		// $doctor->available = $available;
		$doctor->save();
		// print_r($doctor);

		return Redirect::route('doctor.all')->with('success', __('sentence.Doctor Created Successfully'));

    }


    public function view($id){

    	$doctor = User::findOrfail($id);
    	return view('doctor.view', ['doctor' => $doctor]);

    }
	public function update($id, $status){

		if($status == 0){
			$doctor = Doctor::where('id', $id)->update(['is_deleted' => 1]);
			$activeStatus = 'Doctor Deleted Successfully!';
		} else{
			$doctor = Doctor::where('id', $id)->update(['is_deleted' => 0]);
			$activeStatus = 'Doctor Added Successfully';
		}
        return Redirect::route('doctor.all')->with('success', $activeStatus);

    }


}
