@extends('layouts.master')

@section('title')
    {{ __('sentence.Edit Order') }}
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
                    <h6 class="m-0 font-weight-bold text-primary">{{ __('sentence.Edit Order') }}</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('order.store_edit') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">{{ __('sentence.Order Name') }}<font
                                    color="red">*</font></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" name="name" value="{{ $order->name }}">
                                <input type="hidden" class="form-control" id="id" name="id" value="{{ $order->id }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">{{ __('sentence.Order Email') }}<font
                                    color="red">*</font></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="email" name="email" value="{{ $order->email }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone"
                                class="col-sm-3 col-form-label">{{ __('sentence.Order Contact') }}<font color="red">*
                                </font></label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="phone" name="phone"
                                    autocomplete="off" value="{{ $order->phone }}">
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
