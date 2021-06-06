@extends('layouts.master')

@section('title')
    {{ $package->name }}
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col">
            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <center><img src="{{ empty($package->image) ? asset('public/img/patient-icon.png') : url('public/imgs/' . $package->image) }}"
                                    class="img-profile rounded-circle img-fluid"></center>
                            <h4 class="text-center"><b>{{ $package->name }}</b></h4>
                            <hr>
                            @isset($package->lab_name)
                                <p><b>{{ __('sentence.Lab Name') }} :</b> {{ $package->lab_name }}</p>
                            @endisset

                            @isset($package->rate)
                                <p><b>{{ __('sentence.Package Rate') }} :</b> {{ $package->rate }}</p>
                            @endisset

                            @isset($package->lab_test_ids)
                                <p><b>{{ __('sentence.Test') }} :</b> {{ $package->lab_test_ids }}</p>
                            @endisset

                            @isset($package->description)
                                <p><b>{{ __('sentence.Description') }} :</b> {{ $package->description }}</p>
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
