<?php

namespace App\Http\Controllers;

use App\AmbulanceBooking;
use Illuminate\Http\Request;

class AmbulanceBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ambulances = AmbulanceBooking::all();

    	return view('ambulance.all', ['ambulances' => $ambulances]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AmbulanceBooking  $ambulanceBooking
     * @return \Illuminate\Http\Response
     */
    public function show(AmbulanceBooking $ambulanceBooking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AmbulanceBooking  $ambulanceBooking
     * @return \Illuminate\Http\Response
     */
    public function edit(AmbulanceBooking $ambulanceBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AmbulanceBooking  $ambulanceBooking
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, AmbulanceBooking $ambulanceBooking)
    // {
    //     //
    // }
    public function update($id, $status){
		if($status == 0){
			$ambulanceBooking = AmbulanceBooking::where('user_id', $id)->update(['is_deleted' => 1]);
			$activeStatus = 'Ambulance Booking Inactive Successfully!';
		} else{
			$ambulanceBooking = AmbulanceBooking::where('user_id', $id)->update(['is_deleted' => 0]);
			$activeStatus = 'Ambulance Booking Active Successfully';
		}
        return Redirect::route('ambulanceBooking.all')->with('success', $activeStatus);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AmbulanceBooking  $ambulanceBooking
     * @return \Illuminate\Http\Response
     */
    public function destroy(AmbulanceBooking $ambulanceBooking)
    {
        //
    }
}
