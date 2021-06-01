@extends('layouts.master')

@section('title')
    {{ $speciality->name }}
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col">
            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <center><img src="{{ asset('public/img/patient-icon.png') }}"
                                    class="img-profile rounded-circle img-fluid"></center>
                            <h4 class="text-center"><b>{{ $speciality->name }}</b></h4>
                            <hr>
                            @isset($speciality->icon)
                                <p><b>{{ __('sentence.Speciality Icon') }} :</b> {{ $speciality->icon }}</p>
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
