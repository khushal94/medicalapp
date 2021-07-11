<?php

namespace App\Http\Controllers;

use \stdClass;
use Illuminate\Http\Request;
use App\Http\Requests;
use DateTime;
use App\User;
use App\Patient;
use App\Doctor;
use App\Nurse;
use App\Appointment;
use App\Drug;
use App\Prescription;
use App\Setting;
use App\Order;
use App\Coupon;
use App\Test;
use App\Package;
use App\LabBooking;
use App\NurseBooking;
use Response;
use Redirect;
use Hash;
use Validator;
use DB;
use App\Chat;
use App\Speciality;
use Illuminate\Support\Facades\Storage;

class ApiDoctorController extends Controller
{

public function Doctor_Appointments(Request $request)
    {
        $user_id = $request->user_id;

        if (!$user_id) {
            return Response::json(
                array(
                'status' => false,
                'msg' => 'Please provide user ID..'
            ),
                201
            );
        }

        $Appointments = Appointment::leftJoin('users', 'appointments.user_id', '=', 'users.id')
        ->leftJoin('patients', 'appointments.user_id', '=', 'patients.user_id')
        ->where('appointments.doctor_id', $user_id)->get();
        if ($Appointments) {
            return Response::json(
                array(
                'status' => true,
                'data' => $Appointments
            ),
                200
            );
        } else {
            return Response::json(
                array(
                'error' => ['msg' => 'Appointment data not found'],
            ),
                404
            );
        }
    }

}