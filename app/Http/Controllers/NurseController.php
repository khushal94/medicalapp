<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Nurse;
use Hash;
use Redirect;
use Illuminate\Validation\Rule;

class NurseController extends Controller
{

	public function __construct(){
        $this->middleware('auth');
    }


    public function all(){

    	$nurses = User::where('role', 'nurse')->get();

    	return view('nurse.all', ['nurses' => $nurses]);

    }

    public function create(){
		return view('nurse.create');
    }
	// public function store(Request $request){

    // 	$validatedData = $request->validate([
    //     	'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'email', 'max:255'],
	// 		// Rule::unique('users')->ignore($request->user_id),
    //         'birthday' => ['required'],
    //     	'phone' => ['required', 'number', 'max:13'],
    //         'gender' => ['required'],
	// 		'address' => ['required', 'string', 'max:255'],
    //         'role' => ['required', 'string'],
    // 	]);

    // 	$nurse = Nurse::updateOrCreate(
	// 	    ['name' => $request->name, 'email' => $request->email,'birthday' => $request->birthday,'phone' => $request->phone, 'gender' => $request->gender,'address' => $request->adress]
	// 	);

    // 	return Redirect::back()->with('success', __('sentence.Nurse added Successfully'));
    // }
	
    public function edit($id){
		$nurse = User::find($id);
    	return view('nurse.edit',['nurse' => $nurse]);
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

    	]);

    	$user = User::find($request->user_id);
		$user->email = $request->email;
		$user->name = $request->name;
		$user->role = 'nurse';
		$user->update();


		$nurse = Nurse::where('user_id', $request->user_id)
		         			->update(['birthday' => $request->birthday,
										'phone' => $request->phone,
										'name' => $request->name,
										'email' => $request->email,
										'gender' => $request->gender,
										'address' => $request->address,]);

		
		

		return Redirect::back()->with('success', __('sentence.Nurse Updated Successfully'));

    }

    public function store(Request $request){

    	$validatedData = $request->validate([
        	'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'birthday' => ['required'],
            'gender' => ['required'],

    	]);

    	$user = new User();
		$user->password = Hash::make('doctorino123');
		$user->email = $request->email;
		$user->name = $request->name;
		$user->role = 'nurse';
		$user->save();


		$nurse = new Nurse();
		$nurse->user_id = $user->id;
		$nurse->name = $request->name;
		$nurse->email = $request->email;
		$nurse->birthday = $request->birthday;
		$nurse->phone = $request->phone;
		$nurse->gender = $request->gender;
		$nurse->address = $request->address;
		$nurse->save();

		return Redirect::route('nurse.all')->with('success', __('sentence.Nurse Created Successfully'));

    }


    public function view($id){

    	$nurse = User::findOrfail($id);
    	return view('nurse.view', ['nurse' => $nurse]);

    }


}
