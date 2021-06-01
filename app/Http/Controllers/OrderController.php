<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use Hash;
use Redirect;
use Illuminate\Validation\Rule;

class OrderController extends Controller
{

	public function __construct(){
        $this->middleware('auth');
    }


    public function all(){

    	$orders = Order::get();

    	return view('order.all', ['orders' => $orders]);

    }

    public function create(){
		return view('order.create');
    }
	
    public function edit($id){
		$order = Order::find($id);
    	return view('order.edit',['order' => $order]);
    }
	
	public function store_edit(Request $request){

    	$validatedData = $request->validate([
        	'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max: 255'],
            'phone' => ['required', 'max:15'],

    	]);

		$order = Order::where('id', $request->id)->update(['name' => $request->name,
								'email' => $request->email,
								'phone' => $request->phone,]);

		return Redirect::back()->with('success', __('sentence.Order Updated Successfully'));

    }

    public function store(Request $request){

    	$validatedData = $request->validate([
        	'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max: 255'],
            'phone' => ['required', 'max:15'],
    	]);
		$order = new Order();
		$order->name = $request->name;
		$order->email = $request->email;
		$order->phone = $request->phone;
		$order->save();

		return Redirect::route('order.all')->with('success', __('sentence.Order Created Successfully'));

    }


    public function view($id){

    	$order = Order::findOrfail($id);
    	return view('order.view', ['order' => $order]);

    }
	public function update($id, $status){

		if($status == 0){
			$order = Order::where('id', $id)->update(['is_deleted' => 1]);
			$activeStatus = 'Order Deleted Successfully!';
		} else{
			$order = Order::where('id', $id)->update(['is_deleted' => 0]);
			$activeStatus = 'Order Added Successfully';
		}
        return Redirect::route('order.all')->with('success', $activeStatus);

    }


}
