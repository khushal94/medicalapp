@extends('layouts.master')

@section('title')
    {{ $doctor->name }}
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col">
            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <center><img src="{{ asset('img/patient-icon.png') }}"
                                    class="img-profile rounded-circle img-fluid"></center>
                            <h4 class="text-center"><b>{{ $doctor->name }}</b></h4>
                            <hr>
                            @isset($patient->Nurse->birthday)
                                <p><b>{{ __('sentence.Age') }} :</b> {{ $doctor->Nurse->birthday }}
                                    ({{ \Carbon\Carbon::parse($patient->Nurse->birthday)->age }} Years)</p>
                            @endisset

                            @isset($patient->Nurse->gender)
                                <p><b>{{ __('sentence.Gender') }} :</b> {{ __('sentence.' . $patient->Nurse->gender) }}</p>
                            @endisset

                            @isset($patient->Nurse->phone)
                                <p><b>{{ __('sentence.Phone') }} :</b> {{ $doctor->Nurse->phone }}</p>
                            @endisset

                            @isset($patient->Nurse->address)
                                <p><b>{{ __('sentence.Address') }} :</b> {{ $doctor->Nurse->address }}</p>
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('footer')

@endsection
