@extends('layouts.master')

@section('title')
    {{ $order->name }}
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col">
            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <center><img src="{{ asset('img/patient-icon.png') }}"
                                    class="img-profile rounded-circle img-fluid"></center>
                            <h4 class="text-center"><b>{{ $order->name }}</b></h4>
                            <hr>
                            @isset($order->email)
                                <p><b>{{ __('sentence.Order Email') }} :</b> {{ $order->email }}</p>
                            @endisset

                            @isset($order->phone)
                                <p><b>{{ __('sentence.Order Contact') }} :</b> {{ $order->phone }}</p>
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('footer')

@endsection
