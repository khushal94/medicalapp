<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Package;
use App\Test;
use Hash;
use Redirect;
use Illuminate\Validation\Rule;

class PackageController extends Controller
{

	public function __construct(){
        $this->middleware('auth');
    }


    public function all(){

    	// $packages = Package::get();
		$packages = Package::join('tests', 'package.lab_test_ids', '=', 'tests.id')->get(['package.*', 'tests.test_name']);

    	return view('package.all', ['packages' => $packages]);

    }

    public function create(){
		$tests = Test::all();
		return view('package.create', ['tests' => $tests]);
    }
	
    public function edit($id){
		$tests = Test::all();
		// $package = Package::join('tests', 'package.lab_test_ids', '=', 'tests.id')->where("package.id", $id)->get(['package.*', 'tests.test_name']);
		// echo $package;
		$package = Package::find($id);
    	return view('package.edit',['package' => $package, 'tests' => $tests]);
    }
	
	public function store_edit(Request $request){

    	$validatedData = $request->validate([
        	'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'lab_name' => ['required', 'string'],
            'rate' => ['required', 'max:7'],
            'lab_test_ids' => ['required'],

    	]);
		if ($request->hasFile('image')) {
			$validatedData = $request->validate([
				'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			]);
			if(!empty($request->image) && file_exists(public_path().'/imgs/package/'.$request->image)) {
				unlink(public_path().'/imgs/package/'.$request->image);
			}
			$image           = $request->file('image');
			$name            = 'IMG'.time().'.'.$image->getClientOriginalExtension();
			$destinationPath = '/imgs/package/';	
			$image->move(public_path($destinationPath), $name);
			$package = Package::where('id', $request->id)->update(['image' => 'package/'.$name]);			
		}

		$package = Package::where('id', $request->id)->update(['name' => $request->name,
								'description' => $request->description,
								'lab_name' => $request->lab_name,
								'lab_test_ids' => $request->lab_test_ids,
								'rate' => $request->rate,]);

		return Redirect::back()->with('success', __('sentence.Package Updated Successfully'));

    }

    public function store(Request $request){

    	$validatedData = $request->validate([
        	'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'lab_name' => ['required', 'string'],
            'rate' => ['required', 'max:7'],
            'lab_test_ids' => ['required'],
			'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    	]);
		$package = new Package();
		$package->name = $request->name;
		$package->description = $request->description;
		$package->lab_name = $request->lab_name;
		$package->rate = $request->rate;
		$package->lab_test_ids = $request->lab_test_ids;
		$image           = $request->file('image');
		$name            = 'IMG'.time().'.'.$image->getClientOriginalExtension();
		$destinationPath = '/imgs/package/';
		$image->move(public_path($destinationPath), $name);
		$package->image = 'package/'.$name;
		$package->save();

		return Redirect::route('package.all')->with('success', __('sentence.Package Created Successfully'));

    }


    public function view($id){

    	$package = Package::findOrfail($id);
    	return view('package.view', ['package' => $package]);

    }
	public function update($id, $status){

		if($status == 0){
			$package = Package::where('id', $id)->update(['is_active' => 1]);
			$activeStatus = 'Package Deleted Successfully!';
		} else{
			$package = Package::where('id', $id)->update(['is_active' => 0]);
			$activeStatus = 'Package Added Successfully';
		}
        return Redirect::route('package.all')->with('success', $activeStatus);

    }


}
