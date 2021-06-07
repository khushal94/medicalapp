@extends('layouts.master')

@section('title')
    {{ __('sentence.New Nurse Booking') }}
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


        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ __('sentence.New Nurse Booking') }}</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('nursebooking.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">{{ __('sentence.Nurse Name') }}<font
                                    color="red">*</font></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="nurse_id">
                                    <option value="" selected disabled>Select Nurse</option>
                                    @foreach ($nurses as $nurse)
                                        <option value="{{ $nurse->id }}">{{ $nurse->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="icon" class="col-sm-3 col-form-label">{{ __('sentence.Patient Name') }}<font
                                    color="red">*</font></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="patient_id">
                                    <option value="" selected disabled>Select Patient</option>
                                    @foreach ($patients as $patient)
                                        <option value="{{ $patient->id }}">{{ $patient->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="visit_time" class="col-sm-3 col-form-label">{{ __('sentence.Visiting Time') }}
                                <font color="red">*</font>
                            </label>
                            <div class="col-sm-9">
                                <input type="datetime-local" class="form-control" id="visit_time" name="visit_time">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-3 col-form-label">{{ __('sentence.Address') }}</label>
                            <div class="col-sm-9">
                                <textarea rows="2" class="form-control" id="address" name="address"
                                    placeholder="{{ __('sentence.Address') }}"></textarea>
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
