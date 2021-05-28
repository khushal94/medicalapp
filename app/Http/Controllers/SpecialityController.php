<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Speciality;
use Hash;
use Redirect;
use Illuminate\Validation\Rule;

class SpecialityController extends Controller
{

	public function __construct(){
        $this->middleware('auth');
    }


    public function all(){

    	$speciality = Speciality::get();

    	return view('speciality.all', ['speciality' => $speciality]);

    }

    public function create(){
		return view('speciality.create');
    }

    public function edit($id){
		$speciality = Speciality::find($id);
    	return view('speciality.edit',['speciality' => $speciality]);
    }
	
	public function store_edit(Request $request){

    	$validatedData = $request->validate([
        	'name' => ['required', 'string', 'max:255'],
            'icon' => ['required', 'string', 'max:50'],

    	]);


		$speciality = Speciality::where('id', $request->id)
		         			->update(['name' => $request->name,
                                        'icon' => $request->icon]);

		return Redirect::back()->with('success', __('sentence.Speciality Updated Successfully'));

    }

    public function store(Request $request){

    	$validatedData = $request->validate([
        	'name' => ['required', 'string', 'max:255'],
            'icon' => ['required', 'string', 'max:50'],

    	]);

		$speciality = new Speciality();
		$speciality->name = $request->name;
		$speciality->icon = $request->icon;
		$speciality->save();

		return Redirect::route('speciality.all')->with('success', __('sentence.Speciality Created Successfully'));

    }


    public function view($id){

    	$speciality = Speciality::findOrfail($id);
    	return view('speciality.view', ['speciality' => $speciality]);

    }
	public function update($id, $status){

		if($status == 0){
			$speciality = Speciality::where('id', $id)->update(['is_deleted' => 1]);
			$activeStatus = 'Speciality Deleted Successfully!';
		} else{
			$speciality = Speciality::where('id', $id)->update(['is_deleted' => 0]);
			$activeStatus = 'Speciality Added Successfully';
		}
        return Redirect::route('speciality.all')->with('success', $activeStatus);

    }



}
