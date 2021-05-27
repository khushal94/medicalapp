<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DateTime;
use App\User;
use App\Appointment;
use App\Setting;
use Response;
use Redirect;
use Hash;
class ApiController extends Controller
{

    public function User_Login(Request $request){ 


        $this->validate($request, ['email'=>'required|email', 'password' => 'required']);

        $user_email = $request->input('email');
        $user_password = $request->input('password');

        $patient = User::where(['role'=>'patient', 'email'=>$user_email])->first();

        if(!$patient){
            return Response::json(
                array(
                    'status' => false,
                    'msg' => 'No user found using this email address'
                ),201
            );
        }

        if (Hash::check($user_password, $patient->password)) {
            return Response::json(
                array(
                    'status' => true,
                    'data' => $patient
                ),200
            );
        }else{
            return Response::json(
                array(
                    'status' => false,
                    'msg' => 'Password does not match, please try again with correct password'
                ),201
            );
        }


        


    }

    public function Get_Patients(){

        $patients = User::where('role','patient')->get();
        if($patients){



            return Response::json(
                array(
                    'status' => true,
                    'data' => $patients
                ),200
            );
        }else{
            return Response::json(
                array(
                    'error' => ['msg' => 'Patient data not found'],
                ),404
            );
        }
    }



}