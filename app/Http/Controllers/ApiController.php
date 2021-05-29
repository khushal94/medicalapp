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
use App\Setting;
use Response;
use Redirect;
use Hash;
use App\Speciality;
use Illuminate\Support\Facades\Storage;

class ApiController extends Controller
{
    public function User_Login(Request $request)
    {
        $this->validate($request, ['email'=>'required|email', 'password' => 'required']);

        $user_email = $request->input('email');
        $user_password = $request->input('password');

        $patient = User::where(['role'=>'patient', 'email'=>$user_email])->first();
        $patientdata = Patient::where([ 'user_id'=>$patient->id])->first();

        if (!$patient) {
            return Response::json(
                array(
                    'status' => false,
                    'msg' => 'No user found using this email address'
                ),
                201
            );
        }

        if (Hash::check($user_password, $patient->password)) {
            $patientdata->email = $patient->email;
            $patientdata->name = $patient->name;
            return Response::json(
                array(
                    'status' => true,
                    'data' => $patientdata
                ),
                200
            );
        } else {
            return Response::json(
                array(
                    'status' => false,
                    'msg' => 'Password does not match, please try again with correct password'
                ),
                201
            );
        }
    }

    public function Create_Patient(Request $request)
    {
        $this->validate($request, ['email'=>'required|email', 'password' => 'required', ]);

        $usercheckdata = User::where(['email'=>$request->email])->first();
        if ($usercheckdata) {
            return Response::json(
                array(
                    'status' => false,
                    'msg' => 'User with this email already exists..'
                ),
                201
            );
        }

        $usercheckphone = Patient::where(['phone'=>$request->phone])->first();
        if ($usercheckphone) {
            return Response::json(
                array(
                    'status' => false,
                    'msg' => 'User with this phone number already exists..'
                ),
                201
            );
        }

        $user = new User();
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->name = $request->name;
        $user->save();

        $patient = new Patient();
  

        $patient->user_id = $user->id;
        $patient->birthday = $request->birthday;
        $patient->phone = $request->phone;
        $patient->gender = $request->gender;
        $patient->blood = $request->blood;
        $patient->address = $request->address;
        $patient->weight = $request->weight;
        $patient->height = $request->height;
        $patient->save();

        //send to save only
        $patient->email = $user->email;
        $patient->name = $user->name;
        if ($user && $patient) {
            return Response::json(
                array(
                    'status' => true,
                    'data' => $patient,
                    'msg' => 'User Created Successfully, Please Wait..'
                ),
                200
            );
        } else {
            return Response::json(
                array(
                    'status' => false,
                    'msg' => 'Error occured while saving your user, please try again..'
                ),
                201
            );
        }
    }

    public function Get_Patients()
    {
        $patients = User::where('role', 'patient')->get();
        if ($patients) {
            return Response::json(
                array(
                    'status' => true,
                    'data' => $patients
                ),
                200
            );
        } else {
            return Response::json(
                array(
                    'error' => ['msg' => 'Patient data not found'],
                ),
                404
            );
        }
    }

    public function Get_Specialities()
    {
        $specialities = Speciality::get();
        if ($specialities) {
            return Response::json(
                array(
                    'status' => true,
                    'data' => $specialities
                ),
                200
            );
        } else {
            return Response::json(
                array(
                    'error' => ['msg' => 'specialities data not found'],
                ),
                404
            );
        }
    }


    public function App_Landing(Request $request)
    {
        if ($request->latitude) {
            $lat = $request->latitude;
        }
        if ($request->longitude) {
            $long = $request->longitude;
        }

        $doctors = Doctor::get();
        $specialities = new stdClass();
        $doctors_featured = Doctor::get();

        $ResData = new \stdClass();
        $ResData -> top_doctors = $doctors;
        $ResData -> doctors_featured = $doctors;
        $ResData -> specialities = $specialities;

        return Response::json(
            array(
                    'status' => true,
                    'data' => $ResData
                ),
            200
        );
    }

    public function Doctor_By_ID(Request $request)
    {
        $doctor_id = $request->user_id;

        $doctor = Doctor::where([ 'user_id'=>$doctor_id])->first();
        if ($doctor) {
            return Response::json(
                array(
                'status' => true,
                'data' => $doctor
            ),
                200
            );
        } else {
            return Response::json(
                array(
                'error' => ['msg' => 'Doctor data not found'],
            ),
                404
            );
        }
    }

    public function Get_Nurses(Request $request)
    {

        $Nurses = Nurse::get();
        if ($Nurses) {
            return Response::json(
                array(
                'status' => true,
                'data' => $Nurses
            ),
                200
            );
        } else {
            return Response::json(
                array(
                'status' => true,
                'msg' => 'Nurses not found'
            ),
                201
            );
        }
    }

    public function Doctors_By_Speciality(Request $request)
    {
        $speciality = $request->speciality;

        $doctor = Doctor::where([ 'speciality'=>$speciality])->get();
        if ($doctor) {
            return Response::json(
                array(
                'status' => true,
                'data' => $doctor
            ),
                200
            );
        } else {
            return Response::json(
                array(
                'status' => false,
                'data' => 'Doctors data not found by this speciality'
            ),
                201
            );
        }
    }

    public function Book_Appointment(Request $request)
    {
        $user_id = $request->user_id;
        $doctor_id = $request->doctor_id;
        $appointment_time = $request->appointment_time;
        $date = $request->date;

        $appointmentcheck = Appointment::where([ 'user_id'=>$user_id, 'doctor_id'=>$doctor_id, 'date'=>$date])->first();
   
        if ($appointmentcheck) {
            return Response::json(
                array(
                'status' => false,
                'msg' => 'Appointment already exists..',
                'data' => $appointmentcheck
            ),
                201
            );
        }

        $Appointment = new Appointment();
        $Appointment->user_id = $request->user_id;
        $Appointment->doctor_id = $request->doctor_id;
        $Appointment->date = $request->date;
        $Appointment->time_start = $request->time_start;
        $Appointment->first_time = $request->first_time;
        $Appointment->covid_symptoms = $request->covid_symptoms;
        if ($request->description) {
            $Appointment->description = $request->description;
        }
        $Appointment->save();

        if ($Appointment) {
            return Response::json(
                array(
                    'status' => true,
                    'data' => $Appointment,
                    'already' =>$appointmentcheck,
                    'msg' =>'Your appointment has been created successfully..'
                ),
                200
            );
        } else {
            return Response::json(
                array(
                    'status' => false,
                    'msg' => 'appointment not created',
                ),
                201
            );
        }
    }

    public function User_Appointments(Request $request)
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

        $Appointments = Appointment::leftJoin('doctors', 'appointments.doctor_id', '=', 'doctors.user_id')->leftJoin('users', 'appointments.doctor_id', '=', 'users.id')->where('appointments.user_id', $user_id)->get();
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

    public function Upload_Prescription(Request $request){
     
            
        $image = $request->base64_image;  // your base64 encoded
        $image = str_replace('data:image/png;base64,', '', $image);
        $image = str_replace(' ', '+', $image);
        $imageName =   'test.png';
    
        Storage::disk('local')->put($imageName, base64_decode($image));
         
    }


}
