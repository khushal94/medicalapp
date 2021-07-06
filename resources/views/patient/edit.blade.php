@extends('layouts.master')

@section('title')
    {{ __('sentence.Edit Patient') }}
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


        <div class="col-xl-8 col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ __('sentence.Edit Patient') }}</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('patient.store_edit') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" class="form-control" id="inputEmail3" name="user_id"
                            value="{{ $patient->id }}">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="uploadbox">
                                    <label class="upload_image">
                                        <img src="{{ empty($patient->Patient->image) ? url('public/imgs/no-image.png') : url('public/imgs/' . $patient->Patient->image) }}"
                                            alt="Upload Image" title="Upload Image">
                                        <input type="file" name="image" accept="image/png, image/svg, image/jpeg" id="image"
                                            style="display: none">
                                    </label>
                                    <label for="image" class="btn btn-primary btn-block btn-upload">Upload</label>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-form-label">{{ __('sentence.Full Name') }}
                                                <font color="red">*
                                                </font>
                                            </label>
                                            <input type="text" class="form-control" id="inputEmail3" name="name"
                                                value="{{ $patient->name }}"
                                                placeholder="{{ __('sentence.Full Name') }}">

                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label">{{ __('sentence.Email Address') }}<font
                                                    color="red">*
                                                </font></label>
                                            <input type="email" class="form-control" id="inputPassword3" name="email"
                                                value="{{ $patient->email }}" {{ __('sentence.Email Address') }}>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="birthday" class="col-form-label">{{ __('sentence.Birthday') }}
                                            </label>
                                            <input type="text" class="form-control birthday" id="birthday" readonly
                                                name="birthday" value="{{ $patient->Patient->birthday }}"
                                                placeholder="{{ __('sentence.Birthday') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="age" class="col-form-label">{{ __('sentence.Age') }}
                                            </label>
                                            <input type="text" class="form-control age" id="age" name="age"
                                                value="{{ $patient->Patient->age }}"
                                                placeholder="{{ __('sentence.Age') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label">{{ __('sentence.Phone') }}</label>
                                            <input type="text" class="form-control" id="inputPassword3" name="phone"
                                                value="{{ $patient->Patient->phone }}"
                                                placeholder="{{ __('sentence.Phone') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label">{{ __('sentence.Gender') }}
                                                <font color="red">*
                                                </font>
                                            </label>
                                            <select class="form-control" name="gender">
                                                <option value="{{ $patient->Patient->gender }}" selected="selected">
                                                    {{ $patient->Patient->gender }}</option>
                                                <option value="Male">{{ __('sentence.Male') }}</option>
                                                <option value="Female">{{ __('sentence.Female') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label">{{ __('sentence.Blood Group') }}</label>
                                            <select class="form-control" name="blood">
                                                <option value="{{ $patient->Patient->blood }}" selected="selected">
                                                    {{ $patient->Patient->blood }}</option>
                                                <option value="Unknown">{{ __('sentence.Unknown') }}</option>
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label">{{ __('sentence.Address') }}</label>
                                            <input type="text" class="form-control" id="inputPassword3" name="address"
                                                value="{{ $patient->Patient->address }}"
                                                placeholder="{{ __('sentence.Address') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label">{{ __('sentence.Patient Weight') }}</label>
                                            <input type="text" class="form-control" id="inputPassword3" name="weight"
                                                value="{{ $patient->Patient->weight }}"
                                                placeholder="{{ __('sentence.Patient Weight') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label">{{ __('sentence.Patient Height') }}</label>
                                            <input type="text" class="form-control" id="inputPassword3" name="height"
                                                value="{{ $patient->Patient->height }}"
                                                placeholder="{{ __('sentence.Patient Height') }}">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <div class="text-right">
                                                <button type="submit"
                                                    class="btn btn-primary">{{ __('sentence.Save') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
