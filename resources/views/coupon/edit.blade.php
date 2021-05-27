@extends('layouts.master')

@section('title')
    {{ __('sentence.Edit Coupon') }}
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
                    <h6 class="m-0 font-weight-bold text-primary">{{ __('sentence.Edit Coupon') }}</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('coupon.store_edit') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">{{ __('sentence.Coupon Name') }}<font
                                    color="red">*</font></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" name="name" value="{{ $coupon->name }}">
                                <input type="hidden" class="form-control" id="id" name="id" value="{{ $coupon->id }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="code" class="col-sm-3 col-form-label">{{ __('sentence.Coupon Code') }}<font
                                    color="red">*</font></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="code" name="code" value="{{ $coupon->code }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="discount_amount"
                                class="col-sm-3 col-form-label">{{ __('sentence.Discount Amount') }}<font color="red">*
                                </font></label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="discount_amount" name="discount_amount"
                                    autocomplete="off" value="{{ $coupon->discount_amount }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="discount_type" class="col-sm-3 col-form-label">{{ __('sentence.Discount Type') }}
                                <font color="red">*</font>
                            </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="discount_type">
                                    <option value="{{ $coupon->discount_type }}" selected="selected">{{ $coupon->discount_type == 'P' ? __('sentence.Percentage') : __('sentence.Amount') }}</option>
                                    <option value="A">{{ __('sentence.Amount') }}</option>
                                    <option value="P">{{ __('sentence.Percentage') }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="minimum_amount"
                                class="col-sm-3 col-form-label">{{ __('sentence.Minimum Amount') }}</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="minimum_amount" name="minimum_amount" value="{{ $coupon->minimum_amount }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="startingdate" class="col-sm-3 col-form-label">{{ __('sentence.Starting Date') }}
                                <font color="red">*
                                </font>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="startingdate" name="startingdate"
                                    autocomplete="off" readonly value="{{ $coupon->startingdate }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rdvdate" class="col-sm-3 col-form-label">{{ __('sentence.Ending Date') }}
                                <font color="red">*
                                </font>
                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="endingdate" name="endingdate" autocomplete="off"
                                    readonly value="{{ $coupon->endingdate }}">
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