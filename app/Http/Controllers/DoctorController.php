<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Doctor;
use Hash;
use Redirect;
use Illuminate\Validation\Rule;

class DoctorController extends Controller
{

	public function __construct(){
        $this->middleware('auth');
    }


    public function all(){

    	$doctors = User::where('role', 'doctor')->get();

    	return view('doctor.all', ['doctors' => $doctors]);

    }

    public function create(){
		return view('doctor.create');
    }
    public function edit($id){
		$doctor = User::find($id);
    	return view('doctor.edit',['doctor' => $doctor]);
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
			'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

    	]);

    	$user = User::find($request->user_id);
		$user->email = $request->email;
		$user->name = $request->name;
		$user->role = 'doctor';
		$user->update();


		$doctor = Doctor::where('user_id', $request->user_id)
		         			->update(['birthday' => $request->birthday,
										'phone' => $request->phone,
										'name' => $request->name,
										'email' => $request->email,
										'gender' => $request->gender,
										'address' => $request->address,
										'city' => $request->city,
										'state' => $request->state,
										'country' => 'India',
										'speciality' => $request->speciality,
										'experience' => $request->experience,]);

		
		

		return Redirect::back()->with('success', __('sentence.Doctor Updated Successfully'));

    }

    public function store(Request $request){

		if ($request->hasFile('image')) {
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
				'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
	
			]);

			$user = new User();
			$user->password = Hash::make('doctorino123');
			$user->email = $request->email;
			$user->name = $request->name;
			$user->role = 'doctor';
			$user->save();


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
			$imageName = time().'.'.$request->image->extension();       
			$doctor->image = $request->image->move(public_path('image'), $imageName);
			$doctor->save();

		}

		return Redirect::route('doctor.all')->with('success', __('sentence.Doctor Created Successfully'));

    }


    public function view($id){

    	$doctor = User::findOrfail($id);
    	return view('doctor.view', ['doctor' => $doctor]);

    }


}
