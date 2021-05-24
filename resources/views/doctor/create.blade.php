@extends('layouts.master')

@section('title')
    {{ __('sentence.New Doctor') }}
@endsection

@section('content')
    <div class="row">
        <div class="col">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>

    </div>
    <div class="row justify-content-center">


        <div class="col-md-10">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ __('sentence.New Doctor') }}</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('doctor.store') }}" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputEmail3"
                                        class="col-sm-3 col-form-label">{{ __('sentence.Full Name') }}<font color="red">*
                                        </font></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputEmail3" name="name">
                                        {{ csrf_field() }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-3 col-form-label">{{ __('sentence.Email Adress') }}<font
                                            color="red">*</font></label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="inputPassword3" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-3 col-form-label">{{ __('sentence.Birthday') }}<font color="red">*
                                        </font></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="birthday" name="birthday"
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-3 col-form-label">{{ __('sentence.Phone') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword3" name="phone">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-3 col-form-label">{{ __('sentence.Gender') }}<font color="red">*
                                        </font></label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="gender">
                                            <option value="Male">{{ __('sentence.Male') }}</option>
                                            <option value="Female">{{ __('sentence.Female') }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-3 col-form-label">{{ __('sentence.Address') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputPassword3" name="address">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="city" class="col-sm-3 col-form-label">{{ __('sentence.City') }}<font
                                            color="red">*
                                        </font></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="city" name="city">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="state" class="col-sm-3 col-form-label">{{ __('sentence.State') }}<font
                                            color="red">*</font></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="state" name="state">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="country" class="col-sm-3 col-form-label">{{ __('sentence.Country') }}
                                        <font color="red">*
                                        </font>
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="country" name="country"
                                            autocomplete="off" value="India" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="speciality"
                                        class="col-sm-3 col-form-label">{{ __('sentence.Speciality') }}<font color="red">
                                            *
                                        </font></label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="speciality" id="speciality">
                                            <option value="Cardiology">{{ __('sentence.Cardiology') }}</option>
                                            <option value="Diagnostic imaging">{{ __('sentence.Diagnostic imaging') }}
                                            </option>
                                            <option value="Ear nose and throat (ENT)">
                                                {{ __('sentence.Ear nose and throat (ENT)') }}</option>
                                            <option value="General surgery">{{ __('sentence.General surgery') }}</option>
                                            <option value="Maternity departments">
                                                {{ __('sentence.Maternity departments') }}</option>
                                            <option value="Microbiology">{{ __('sentence.Microbiology') }}</option>
                                            <option value="Nephrology">{{ __('sentence.Nephrology') }}</option>
                                            <option value="Neurology">{{ __('sentence.Neurology') }}</option>
                                            <option value="Nutrition and dietetics">
                                                {{ __('sentence.Nutrition and dietetics') }}</option>
                                            <option value="Occupational therapy">
                                                {{ __('sentence.Occupational therapy') }}</option>
                                            <option value="Oncology">{{ __('sentence.Oncology') }}</option>
                                            <option value="Ophthalmology">{{ __('sentence.Ophthalmology') }}</option>
                                            <option value="Orthopaedics">{{ __('sentence.Orthopaedics') }}</option>
                                            <option value="Pain management clinics">
                                                {{ __('sentence.Pain management clinics') }}</option>
                                            <option value="Physiotherapy">{{ __('sentence.Physiotherapy') }}</option>
                                            <option value="Radiotherapy">{{ __('sentence.Radiotherapy') }}</option>
                                            <option value="Renal unit">{{ __('sentence.Renal unit') }}</option>
                                            <option value="Rheumatology">{{ __('sentence.Rheumatology') }}</option>
                                            <option value="Sexual health (genitourinary medicine)">
                                                {{ __('sentence.Sexual health (genitourinary medicine)') }}</option>
                                            <option value="Urology">{{ __('sentence.Urology') }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="experience"
                                        class="col-sm-3 col-form-label">{{ __('sentence.Experience') }}<font color="red">
                                            *
                                        </font></label>
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="experience" name="experience">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="image" class="col-sm-3 col-form-label">{{ __('sentence.Image') }}</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary">{{ __('sentence.Save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>

@endsection

@section('header')

@endsection

@section('footer')

@endsection
