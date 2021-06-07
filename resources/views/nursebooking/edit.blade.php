@extends('layouts.master')

@section('title')
    {{ __('sentence.Edit Nurse booking') }}
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
                    <h6 class="m-0 font-weight-bold text-primary">{{ __('sentence.Edit Nurse booking') }}</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('nursebooking.store_edit') }}">
                        {{ csrf_field() }}
                        <input type="hidden" class="form-control" id="id" name="id" value="{{ $nursebooking->id }}">
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">{{ __('sentence.Nurse Name') }}<font
                                    color="red">*</font></label>
                            <div class="col-sm-9">
                                <select class="form-control" name="nurse_id">
                                    @foreach ($nurses as $nurse)
                                        <option value="{{ $nurse->id }}" @if ($nursebooking->nurse_id == $nurse->id) selected @endif>{{ $nurse->name }}
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
                                    @foreach ($patients as $patient)
                                        <option value="{{ $patient->id }}" @if ($nursebooking->patient_id == $patient->id) selected @endif>{{ $patient->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="visit_time" class="col-sm-3 col-form-label">{{ __('sentence.Visiting Time') }}
                                <font color="red">*</font></label>
                            <div class="col-sm-9">
                                <input type="datetime-local" class="form-control" id="visit_time" name="visit_time"
                                    value="{{ date('d-m-y H:i', strtotime("$nursebooking->visit_date $nursebooking->visit_time")) }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-3 col-form-label">{{ __('sentence.Address') }}</label>
                            <div class="col-sm-9">
                                <textarea rows="2" class="form-control" id="address" name="address"
                                    placeholder="{{ __('sentence.Address') }}">{{ $nursebooking->address }}</textarea>
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
