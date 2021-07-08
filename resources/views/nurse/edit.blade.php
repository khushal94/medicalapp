@extends('layouts.master')

@section('title')
    {{ __('sentence.Edit Nurse') }}
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
                    <h6 class="m-0 font-weight-bold text-primary">{{ __('sentence.Edit Nurse') }}</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('nurse.store_edit') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" class="form-control" id="inputEmail3" name="user_id"
                            value="{{ $nurse->id }}">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="uploadbox">
                                    <label class="upload_image">
                                        <img src="{{ empty($nurse->Nurse->image) ? url('public/imgs/no-image.png') : url('public/imgs/' . $nurse->Nurse->image) }}"
                                            alt="Upload Image" title="Upload Image">
                                        <input type="file" name="image" accept="image/png, image/svg, image/jpeg" id="image" style="display: none">
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
                                                value="{{ $nurse->name }}"
                                                placeholder="{{ __('sentence.Full Name') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label">{{ __('sentence.Email Address') }}
                                                <font color="red">*</font>
                                            </label>
                                            <input type="email" class="form-control" id="inputPassword3" name="email"
                                                value="{{ $nurse->email }}"
                                                placeholder="{{ __('sentence.Email Address') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label">{{ __('sentence.Birthday') }}<font color="red">*
                                                </font></label>
                                            <input type="text" class="form-control birthday" id="birthday" readonly
                                                name="birthday" autocomplete="off" value="{{ $nurse->Nurse->birthday }}"
                                                placeholder="{{ __('sentence.Birthday') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label">{{ __('sentence.Phone') }}</label>
                                            <input type="number" class="form-control" id="inputPassword3" name="phone"
                                                value="{{ $nurse->Nurse->phone }}"
                                                placeholder="{{ __('sentence.Phone') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword3"
                                                class="col-form-label">{{ __('sentence.Gender') }}<font color="red">*
                                                </font></label>
                                            <select class="form-control" name="gender">
                                                <option value="{{ $nurse->Nurse->gender }}" selected="selected">
                                                    {{ $nurse->Nurse->gender }}</option>
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
                                                value="{{ $nurse->Nurse->address }}"
                                                placeholder="{{ __('sentence.Address') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="lat"
                                                class="col-form-label">{{ __('sentence.Lattitude') }}</label>
                                            <input type="text" class="form-control" id="lat" name="lat"
                                                value="{{ $nurse->Nurse->lat }}"
                                                placeholder="{{ __('sentence.Lattitude') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="long"
                                                class="col-form-label">{{ __('sentence.Longitude') }}</label>
                                            <input type="text" class="form-control" id="long" name="long"
                                                value="{{ $nurse->Nurse->long }}"
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
                                        value="{{ $nurse->Nurse->city }}" placeholder="{{ __('sentence.City') }}">
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label for="state" class="col-form-label">{{ __('sentence.State') }}
                                        <font color="red">*</font>
                                    </label>
                                    <input type="text" class="form-control" id="state" name="state"
                                        value="{{ $nurse->Nurse->state }}" placeholder="{{ __('sentence.State') }}">
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
                                    <label for="qualification" class="col-form-label">{{ __('sentence.Qualification') }}
                                        <font color="red">*
                                        </font>
                                    </label>
                                    <input type="text" class="form-control" id="qualification" name="qualification"
                                        autocomplete="off" placeholder="{{ __('sentence.Qualification') }}"
                                        value="{{ $nurse->Nurse->qualification }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description"
                                        class="col-form-label">{{ __('sentence.Description') }}</label>
                                    <textarea rows="3" class="form-control" id="description" name="description"
                                        placeholder="{{ __('sentence.Description') }}">{{ $nurse->Nurse->description }}
                                              </textarea>
                                </div>
                            </div>
                        </div>
                        {{-- <hr>
                        <div class="row">
                            <div class="col-12">
                                <h6>Select Availablity</h6>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="">{{ __('sentence.Day') }}</label>
                                    <input type="text" name="mon_day" disabled placeholder="Monday" value="Monday"
                                        class="form-control">
                                </div>
                                <div class="col-md-1">
                                    <label for="">Available</label>
                                    <input type="checkbox" name="mon_status" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Starting Time</label>
                                    <input type="text" name="mon_start_time" id="" class="form-control"
                                        placeholder="Starting Time">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Ending Time</label>
                                    <input type="text" name="mon_end_time" id="" class="form-control"
                                        placeholder="Ending Time">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="">{{ __('sentence.Day') }}</label>
                                    <input type="text" name="tues_day" disabled placeholder="Tuesday" value="Tuesday"
                                        class="form-control">
                                </div>
                                <div class="col-md-1">
                                    <label for="">Available</label>
                                    <input type="checkbox" name="tues_status" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Starting Time</label>
                                    <input type="text" name="tues_start_time" id="" class="form-control"
                                        placeholder="Starting Time">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Ending Time</label>
                                    <input type="text" name="tues_end_time" id="" class="form-control"
                                        placeholder="Ending Time">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="">{{ __('sentence.Day') }}</label>
                                    <input type="text" name="wed_day" disabled placeholder="Wednesday" value="Wednesday"
                                        class="form-control">
                                </div>
                                <div class="col-md-1">
                                    <label for="">Available</label>
                                    <input type="checkbox" name="wed_status" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Starting Time</label>
                                    <input type="text" name="wed_start_time" id="" class="form-control"
                                        placeholder="Starting Time">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Ending Time</label>
                                    <input type="text" name="wed_end_time" id="" class="form-control"
                                        placeholder="Ending Time">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="">{{ __('sentence.Day') }}</label>
                                    <input type="text" name="thrus_day" disabled placeholder="Thrusday" value="Thrusday"
                                        class="form-control">
                                </div>
                                <div class="col-md-1">
                                    <label for="">Available</label>
                                    <input type="checkbox" name="thrus_status" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Starting Time</label>
                                    <input type="text" name="thrus_start_time" id="" class="form-control"
                                        placeholder="Starting Time">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Ending Time</label>
                                    <input type="text" name="thrus_end_time" id="" class="form-control"
                                        placeholder="Ending Time">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="">{{ __('sentence.Day') }}</label>
                                    <input type="text" name="fri_day" disabled placeholder="Friday" value="Friday"
                                        class="form-control">
                                </div>
                                <div class="col-md-1">
                                    <label for="">Available</label>
                                    <input type="checkbox" name="fri_status" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Starting Time</label>
                                    <input type="text" name="fri_start_time" id="" class="form-control"
                                        placeholder="Starting Time">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Ending Time</label>
                                    <input type="text" name="fri_end_time" id="" class="form-control"
                                        placeholder="Ending Time">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="">{{ __('sentence.Day') }}</label>
                                    <input type="text" name="saturday_day" disabled placeholder="Saturday" value="Saturday"
                                        class="form-control">
                                </div>
                                <div class="col-md-1">
                                    <label for="">Available</label>
                                    <input type="checkbox" name="saturday_status" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Starting Time</label>
                                    <input type="text" name="saturday_start_time" id="" class="form-control"
                                        placeholder="Starting Time">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Ending Time</label>
                                    <input type="text" name="saturday_end_time" id="" class="form-control"
                                        placeholder="Ending Time">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="">{{ __('sentence.Day') }}</label>
                                    <input type="text" name="sun_day" disabled placeholder="Sunday" value="Sunday"
                                        class="form-control">
                                </div>
                                <div class="col-md-1">
                                    <label for="">Available</label>
                                    <input type="checkbox" name="sun_status" class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Starting Time</label>
                                    <input type="text" name="sun_start_time" id="" class="form-control"
                                        placeholder="Starting Time">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Ending Time</label>
                                    <input type="text" name="sun_end_time" id="" class="form-control"
                                        placeholder="Ending Time">
                                </div>
                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">{{ __('sentence.Save') }}</button>
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
