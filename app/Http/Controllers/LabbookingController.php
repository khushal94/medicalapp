<?php

namespace App\Http\Controllers;

use App\Labbooking;
use Illuminate\Http\Request;

class LabbookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $labbookings = Labbooking::join('users', 'labbooking.user_id', '=', 'users.id')->get(['labbooking.*', 'users.name as user_name']);
    	// $nursebookings = Labbooking::join('nurses', 'nursebooking.nurse_id', '=', 'nurses.id')->get(['nursebooking.*','nurses.name as nurse_name']);
    	return view('labbooking.all', ['labbookings' => $labbookings]);
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
     * @param  \App\Labbooking  $labbooking
     * @return \Illuminate\Http\Response
     */
    public function show(Labbooking $labbooking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Labbooking  $labbooking
     * @return \Illuminate\Http\Response
     */
    public function edit(Labbooking $labbooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Labbooking  $labbooking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Labbooking $labbooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Labbooking  $labbooking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Labbooking $labbooking)
    {
        //
    }
}
