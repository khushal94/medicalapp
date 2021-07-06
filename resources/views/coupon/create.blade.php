@extends('layouts.master')

@section('title')
    {{ __('sentence.New Coupon') }}
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
                    <h6 class="m-0 font-weight-bold text-primary">{{ __('sentence.New Coupon') }}</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('coupon.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="box">
                                    <div class="js--image-preview"></div>
                                    <div class="upload-options">
                                        <label>
                                            <input type="file" class="image-upload" accept="image/png, image/svg, image/jpeg" name="image" />
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="name" class="col-form-label">{{ __('sentence.Coupon Name') }}
                                                <font color="red">*</font>
                                            </label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="{{ __('sentence.Coupon Name') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="code" class="col-form-label">{{ __('sentence.Coupon Code') }}
                                                <font color="red">*</font>
                                            </label>
                                            <input type="text" class="form-control" id="code" name="code" placeholder="{{ __('sentence.Coupon Code') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="category"
                                                class="col-form-label">{{ __('sentence.Select Category') }}
                                                <font color="red">*</font>
                                            </label>
                                            <select class="form-control" name="category">
                                                <option value="appointment ">{{ __('sentence.Appointment ') }}</option>
                                                <option value="nurse-visit">{{ __('sentence.Nurse Visit') }}</option>
                                                <option value="lab-test">{{ __('sentence.Lab Test') }}</option>
                                                <option value="package">{{ __('sentence.Package') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="discount_amount"
                                                class="col-form-label">{{ __('sentence.Discount Amount') }}<font
                                                    color="red">*
                                                </font></label>
                                            <input type="number" class="form-control" id="discount_amount"
                                                name="discount_amount" autocomplete="off" placeholder="{{ __('sentence.Discount Amount') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="discount_type"
                                                class="col-form-label">{{ __('sentence.Discount Type') }}
                                                <font color="red">*</font>
                                            </label>
                                            <select class="form-control" name="discount_type">
                                                <option value="A">{{ __('sentence.Amount') }}</option>
                                                <option value="P">{{ __('sentence.Percentage') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="minimum_amount"
                                                class="col-form-label">{{ __('sentence.Minimum Amount') }}</label>
                                            <input type="text" class="form-control" id="minimum_amount"
                                                name="minimum_amount" placeholder="{{ __('sentence.Minimum Amount') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="startingdate"
                                                class="col-form-label">{{ __('sentence.Starting Date') }}
                                                <font color="red">*
                                                </font>
                                            </label>
                                            <input type="text" class="form-control" id="startingdate" name="startingdate"
                                                autocomplete="off" readonly placeholder="{{ __('sentence.Starting Date') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="rdvdate" class="col-form-label">{{ __('sentence.Ending Date') }}
                                                <font color="red">*
                                                </font>
                                            </label>
                                            <input type="text" class="form-control" id="endingdate" name="endingdate"
                                                autocomplete="off" readonly placeholder="{{ __('sentence.Ending Date') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="text-right">
                                    <div class="form-group">
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
