<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Coupon;
use Hash;
use Redirect;
use Illuminate\Validation\Rule;

class CouponController extends Controller
{

	public function __construct(){
        $this->middleware('auth');
    }


    public function all(){

    	$coupons = Coupon::get();

    	return view('coupon.all', ['coupons' => $coupons]);

    }

    public function create(){
		return view('coupon.create');
    }
	
    public function edit($id){
		$coupon = Coupon::find($id);
    	return view('coupon.edit',['coupon' => $coupon]);
    }
	
	public function store_edit(Request $request){

    	$validatedData = $request->validate([
        	'name' => ['required', 'string', 'max:255'],
            'code' => ['required', 'string', 'max: 50'],
            'discount_amount' => ['required', 'max:6'],
            'discount_type' => ['required'],
            'minimum_amount' => ['required', 'max:7'],
            'startingdate' => ['required'],
            'endingdate' => ['required'],

    	]);

		$coupon = Coupon::where('id', $request->id)->update(['name' => $request->name,
								'code' => $request->code,
								'discount_amount' => $request->discount_amount,
								'discount_type' => $request->discount_type,
								'minimum_amount' => $request->minimum_amount,
								'startingdate' => $request->startingdate,
								'endingdate' => $request->endingdate,]);

		return Redirect::back()->with('success', __('sentence.Coupon Updated Successfully'));

    }

    public function store(Request $request){

    	$validatedData = $request->validate([
        	'name' => ['required', 'string', 'max:255'],
            'code' => ['required', 'string', 'max: 50'],
            'discount_amount' => ['required', 'max:6'],
            'discount_type' => ['required'],
            'minimum_amount' => ['required', 'max:7'],
            'startingdate' => ['required'],
            'endingdate' => ['required']
    	]);
		$coupon = new Coupon();
		$coupon->name = $request->name;
		$coupon->code = $request->code;
		$coupon->discount_amount = $request->discount_amount;
		$coupon->discount_type = $request->discount_type;
		$coupon->minimum_amount = $request->minimum_amount;
		$coupon->startingdate = $request->startingdate;
		$coupon->endingdate = $request->endingdate;
		$coupon->save();

		return Redirect::route('coupon.all')->with('success', __('sentence.Coupon Created Successfully'));

    }


    public function view($id){

    	$coupon = Coupon::findOrfail($id);
    	return view('coupon.view', ['coupon' => $coupon]);

    }


}
