@extends('layouts.master')

@section('title')
    {{ __('sentence.New Order') }}
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
                    <h6 class="m-0 font-weight-bold text-primary">{{ __('sentence.New Order') }}</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('order.store') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">{{ __('sentence.Order User') }}<font
                                    color="red">*</font></label>
                            <div class="col-sm-9">
                                <select class="form-control" id="user_id" name="name">
                                    <option value="" selected disabled>Select User</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="medicines" class="col-sm-3 col-form-label">{{ __('sentence.Order Medicines') }}
                                <font color="red">*</font>
                            </label>
                            <div class="col-sm-9">
                                <select class="form-control" id="medicines" name="medicines">
                                    <option value="" selected disabled>Select Medicine</option>
                                    @foreach ($drugs as $drug)
                                        <option value="{{ $drug }}">{{ $drug->trade_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="type" class="col-sm-3 col-form-label">{{ __('sentence.Order Type') }}<font
                                    color="red">*
                                </font></label>
                            <div class="col-sm-9">
                                <select class="form-control" id="type" name="type">
                                    <option value="" selected disabled>Select Type</option>
                                    <option value="tablet">Tablet </option>
                                    <option value="syrup capsule">Syrup Capsule</option>
                                    <option value="other">other</option>
                                </select>
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
