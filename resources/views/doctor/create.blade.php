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


        <div class="col-xl-8 col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ __('sentence.New Doctor') }}</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('doctor.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-xl-4">
                                {{-- <div class="form-group">
                                    <label class="upload_image" style="display: block">
                                        <img src="{{ url('public/imgs/no-image.png') }}" alt="Upload Image" title="Upload Image"
                                            style="width: 100%">
                                        <input type="file" name="image" accept="image/*" id="image" style="display: none">
                                    </label>
                                    <label for="image" class="btn btn-primary btn-block">Choose File</label>
                                </div> --}}
                                <div class="box">
                                    <div class="js--image-preview"></div>
                                    <div class="upload-options">
                                        <label>
                                            <input type="file" class="image-upload"
                                                accept="image/png, image/svg, image/jpeg" name="image" />
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-form-label">{{ __('sentence.Full Name') }}
                                                <font color="red">*</font>
                                            </label>
                                            <input type="text" class="form-control" id="inputEmail3" name="name"
                                                placeholder="{{ __('sentence.Full Name') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label">{{ __('sentence.Email Address') }}<font
                                                    color="red">
                                                    *</font></label>
                                            <input type="email" class="form-control" id="inputPassword3" name="email"
                                                placeholder="{{ __('sentence.Email Address') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label">{{ __('sentence.Birthday') }}<font color="red">*
                                                </font></label>
                                            <input type="text" class="form-control birthday" id="birthday" readonly
                                                name="birthday" autocomplete="off"
                                                placeholder="{{ __('sentence.Birthday') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label">{{ __('sentence.Phone') }}</label>
                                            <input type="number" class="form-control" id="inputPassword3" name="phone"
                                                placeholder="{{ __('sentence.Phone') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label">{{ __('sentence.Gender') }}<font color="red">*
                                                </font></label>
                                            <select class="form-control" name="gender">
                                                <option value="Male">{{ __('sentence.Male') }}</option>
                                                <option value="Female">{{ __('sentence.Female') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label">{{ __('sentence.Address') }}</label>
                                            <input type="text" class="form-control" id="inputPassword3" name="address"
                                                placeholder=" {{ __('sentence.Address') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="experience"
                                                class="col-form-label">{{ __('sentence.Experience In Years') }}
                                                <font color="red">
                                                    *
                                                </font>
                                            </label>
                                            <input type="number" class="form-control" id="experience" name="experience"
                                                placeholder="{{ __('sentence.Experience In Years') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="speciality"
                                                class="col-form-label">{{ __('sentence.Speciality') }}<font color="red">
                                                    *
                                                </font></label>
                                            <select class="form-control" name="speciality" id="speciality">
                                                <option value="">{{ __('sentence.Select Speciality') }}</option>
                                                @foreach ($specialities as $speciality)
                                                    <option value="{{ $speciality->name }}">{{ $speciality->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            {{-- <select class="form-control" name="speciality" id="speciality">
                                                <option value="Cardiology">{{ __('sentence.Cardiology') }}</option>
                                                <option value="Diagnostic imaging">
                                                    {{ __('sentence.Diagnostic imaging') }}
                                                </option>
                                                <option value="Ear nose and throat (ENT)">
                                                    {{ __('sentence.Ear nose and throat (ENT)') }}</option>
                                                <option value="General surgery">{{ __('sentence.General surgery') }}
                                                </option>
                                                <option value="Maternity departments">
                                                    {{ __('sentence.Maternity departments') }}</option>
                                                <option value="Microbiology">{{ __('sentence.Microbiology') }}
                                                </option>
                                                <option value="Nephrology">{{ __('sentence.Nephrology') }}</option>
                                                <option value="Neurology">{{ __('sentence.Neurology') }}</option>
                                                <option value="Nutrition and dietetics">
                                                    {{ __('sentence.Nutrition and dietetics') }}</option>
                                                <option value="Occupational therapy">
                                                    {{ __('sentence.Occupational therapy') }}</option>
                                                <option value="Oncology">{{ __('sentence.Oncology') }}</option>
                                                <option value="Ophthalmology">{{ __('sentence.Ophthalmology') }}
                                                </option>
                                                <option value="Orthopaedics">{{ __('sentence.Orthopaedics') }}
                                                </option>
                                                <option value="Pain management clinics">
                                                    {{ __('sentence.Pain management clinics') }}</option>
                                                <option value="Physiotherapy">{{ __('sentence.Physiotherapy') }}
                                                </option>
                                                <option value="Radiotherapy">{{ __('sentence.Radiotherapy') }}
                                                </option>
                                                <option value="Renal unit">{{ __('sentence.Renal unit') }}</option>
                                                <option value="Rheumatology">{{ __('sentence.Rheumatology') }}
                                                </option>
                                                <option value="Sexual health (genitourinary medicine)">
                                                    {{ __('sentence.Sexual health (genitourinary medicine)') }}
                                                </option>
                                                <option value="Urology">{{ __('sentence.Urology') }}</option>
                                                </select> --}}
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="lat"
                                                class="col-form-label">{{ __('sentence.Lattitude') }}</label>
                                            <input type="text" class="form-control" id="lat" name="lat"
                                                placeholder="{{ __('sentence.Lattitude') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="long"
                                                class="col-form-label">{{ __('sentence.Longitude') }}</label>
                                            <input type="text" class="form-control" id="long" name="long"
                                                placeholder="{{ __('sentence.Longitude') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-xl-4 col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label for="city" class="col-form-label">{{ __('sentence.City') }}
                                        <font color="red">*
                                        </font>
                                    </label>
                                    <input type="text" class="form-control" id="city" name="city"
                                        placeholder="{{ __('sentence.City') }}">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label for="state" class="col-form-label">{{ __('sentence.State') }}
                                        <font color="red">*</font>
                                    </label>
                                    <input type="text" class="form-control" id="state" name="state"
                                        placeholder="{{ __('sentence.State') }}">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label for="country" class="col-form-label">{{ __('sentence.Country') }}
                                        <font color="red">*
                                        </font>
                                    </label>
                                    <input type="text" class="form-control" id="country" name="country" autocomplete="off"
                                        value="India" disabled>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label for="registration" class="col-form-label">{{ __('sentence.Registration') }}
                                        <font color="red">*</font>
                                    </label>
                                    <input type="text" class="form-control" id="registration" name="registration"
                                        placeholder="{{ __('sentence.Registration') }}">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label for="qualification" class="col-form-label">{{ __('sentence.Qualification') }}
                                        <font color="red">*
                                        </font>
                                    </label>
                                    <input type="text" class="form-control" id="qualification" name="qualification"
                                        autocomplete="off" placeholder="{{ __('sentence.Qualification') }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description"
                                        class="col-form-label">{{ __('sentence.Description') }}</label>
                                    <textarea rows="3" class="form-control" id="description" name="description"
                                        placeholder="{{ __('sentence.Description') }}"></textarea>
                                </div>
                            </div>
                        </div>
                         {{--  
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <h6>Select Availablity</h6>
                                </div>
                            </div>
                            <div class="form-group">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="">{{ __('sentence.Day') }}</label>
                                    <input type="text" name="day[]" disabled placeholder="Monday" value="Monday"
                                        class="form-control">
                                </div>
                                <div class="col-md-1">
                                    <label for="">Available</label>
                                    <input type="checkbox" name="status[]" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Starting Time</label>
                                    <input type="text" name="start_time[]" id="" class="form-control"
                                        placeholder="Starting Time">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Ending Time</label>
                                    <input type="text" name="end_time[]" id="" class="form-control"
                                        placeholder="Ending Time">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="">{{ __('sentence.Day') }}</label>
                                    <input type="text" name="day[]" disabled placeholder="Tuesday" value="Tuesday"
                                        class="form-control">
                                </div>
                                <div class="col-md-1">
                                    <label for="">Available</label>
                                    <input type="checkbox" name="status[]" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Starting Time</label>
                                    <input type="text" name="start_time[]" id="" class="form-control"
                                        placeholder="Starting Time">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Ending Time</label>
                                    <input type="text" name="end_time[]" id="" class="form-control"
                                        placeholder="Ending Time">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="">{{ __('sentence.Day') }}</label>
                                    <input type="text" name="day[]" disabled placeholder="Wednesday" value="Wednesday"
                                        class="form-control">
                                </div>
                                <div class="col-md-1">
                                    <label for="">Available</label>
                                    <input type="checkbox" name="status[]" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Starting Time</label>
                                    <input type="text" name="start_time[]" id="" class="form-control"
                                        placeholder="Starting Time">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Ending Time</label>
                                    <input type="text" name="end_time[]" id="" class="form-control"
                                        placeholder="Ending Time">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="">{{ __('sentence.Day') }}</label>
                                    <input type="text" name="day[]" disabled placeholder="Thrusday" value="Thrusday"
                                        class="form-control">
                                </div>
                                <div class="col-md-1">
                                    <label for="">Available</label>
                                    <input type="checkbox" name="status[]" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Starting Time</label>
                                    <input type="text" name="start_time[]" id="" class="form-control"
                                        placeholder="Starting Time">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Ending Time</label>
                                    <input type="text" name="end_time[]" id="" class="form-control"
                                        placeholder="Ending Time">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="">{{ __('sentence.Day') }}</label>
                                    <input type="text" name="day[]" disabled placeholder="Friday" value="Friday"
                                        class="form-control">
                                </div>
                                <div class="col-md-1">
                                    <label for="">Available</label>
                                    <input type="checkbox" name="status[]" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Starting Time</label>
                                    <input type="text" name="start_time[]" id="" class="form-control"
                                        placeholder="Starting Time">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Ending Time</label>
                                    <input type="text" name="end_time[]" id="" class="form-control"
                                        placeholder="Ending Time">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="">{{ __('sentence.Day') }}</label>
                                    <input type="text" name="day[]" disabled placeholder="Saturday" value="Saturday"
                                        class="form-control">
                                </div>
                                <div class="col-md-1">
                                    <label for="">Available</label>
                                    <input type="checkbox" name="status[]" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Starting Time</label>
                                    <input type="text" name="start_time[]" id="" class="form-control"
                                        placeholder="Starting Time">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Ending Time</label>
                                    <input type="text" name="end_time[]" id="" class="form-control"
                                        placeholder="Ending Time">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="">{{ __('sentence.Day') }}</label>
                                    <input type="text" name="day[]" disabled placeholder="Sunday" value="Sunday"
                                        class="form-control">
                                </div>
                                <div class="col-md-1">
                                    <label for="">Available</label>
                                    <input type="checkbox" name="status[]" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Starting Time</label>
                                    <input type="text" name="start_time[]" id="" class="form-control"
                                        placeholder="Starting Time">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Ending Time</label>
                                    <input type="text" name="end_time[]" id="" class="form-control"
                                        placeholder="Ending Time">
                                </div>
                            </div>
                        </div>                         
                         --}}
                        <div class="form-group">
                            <div class="text-right">
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
