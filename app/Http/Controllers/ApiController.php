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
class ApiController extends Controller
{

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
    public function Get_Nurses(){ 

        $nurses = User::where('role','nurse')->get();

        if($nurses){

            return Response::json(
                array(
                    'status' => true,
                    'data' => $nurses
                ),200
            );

        }else{
            return Response::json(
                array(
                    'error' => ['msg' => 'Nurse data not found'],
                ),404
            );
        }

    }



}