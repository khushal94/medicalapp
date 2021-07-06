<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Patient;
use App\Prescription;
use App\Appointment;
use App\Billing;
use Hash;
use Redirect;
use Illuminate\Validation\Rule;

class PatientController extends Controller
{

	public function __construct(){
        $this->middleware('auth');
    }


    public function all(){

    	$patients = Patient::join('users', 'patients.user_id', '=', 'users.id')->get(['patients.*', 'users.name', 'users.email']);

    	return view('patient.all', ['patients' => $patients]);

    }

    public function create(){
    	return view('patient.create');
    }

    public function edit($id){
    	$patient = User::find($id);
    	return view('patient.edit',['patient' => $patient]);
    }

        public function store_edit(Request $request){

    	$validatedData = $request->validate([
        	'name' => ['required', 'string', 'max:255'],
            'email' => [
		        'required', 'email', 'max:255',
		        Rule::unique('users')->ignore($request->user_id),
		    ],
            'gender' => ['required'],

    	]);
		if ($request->hasFile('image')) {
			$validatedData = $request->validate([
				'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			]);
			if(!empty($request->image) && file_exists(public_path().'/imgs/patients/'.strtolower(now()->monthName).'/'.$request->image)) {
				unlink(public_path().'/imgs/patients/'.strtolower(now()->monthName).'/'.$request->image);
			}
			$image           = $request->file('image');
			$name            = 'IMG'.$request->user_id.'.'.$image->getClientOriginalExtension();
			$destinationPath = '/imgs/patients/'.strtolower(now()->monthName);	
			$image->move(public_path($destinationPath), $name);
			$patient = Patient::where('user_id', $request->user_id)->update(['image' => 'patients/'.strtolower(now()->monthName).'/'.$name]);			
		}

    	$user = User::find($request->user_id);
		$user->email = $request->email;
		$user->name = $request->name;
		$user->update();


		$patient = Patient::where('user_id', $request->user_id)
		         			->update(['birthday' => $request->birthday,
										'age' => $request->age,
										'phone' => $request->phone,
										'gender' => $request->gender,
										'blood' => $request->blood,
										'address' => $request->address,
										'weight' => $request->weight,
										'height' => $request->height]);

		
		

		return Redirect::back()->with('success', __('sentence.Patient Updated Successfully'));

    }

    public function store(Request $request){

    	$validatedData = $request->validate([
        	'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'gender' => ['required'],
			'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    	]);

    	$user = new User();
		$user->password = Hash::make('doctorino123');
		$user->email = $request->email;
		$user->name = $request->name;
		$user->save();


		$patient = new Patient();
		$patient->user_id = $user->id;
		$patient->birthday = $request->birthday;
		$patient->age = $request->age;
		$patient->phone = $request->phone;
		$patient->gender = $request->gender;
		$patient->blood = $request->blood;
		$patient->address = $request->address;
		$patient->weight = $request->weight;
		$patient->height = $request->height;
		$image           = $request->file('image');
		$name            = 'IMG'.time().'.'.$image->getClientOriginalExtension();
		$destinationPath = '/imgs/patients/'.strtolower(now()->monthName);
		$image->move(public_path($destinationPath), $name);
		$patient->image = 'patients/'.strtolower(now()->monthName).'/'.$name;
		$patient->save();

		return Redirect::route('patient.all')->with('success', __('sentence.Patient Created Successfully'));

    }


    public function view($id){

    	$patient = User::findOrfail($id);
        $prescriptions = Prescription::where('user_id' ,$id)->OrderBy('id','Desc')->get();
        $appointments = Appointment::where('user_id' ,$id)->OrderBy('id','Desc')->get();
        $invoices = Billing::where('user_id' ,$id)->OrderBy('id','Desc')->get();
    	return view('patient.view', ['patient' => $patient, 'prescriptions' => $prescriptions, 'appointments' => $appointments, 'invoices' => $invoices]);

    }


}
