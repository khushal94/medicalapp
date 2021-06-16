@extends('layouts.master')

@section('title')
    {{ $nurse->name }}
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col">
            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <center><img
                                    src="{{ empty($nurse->Nurse->image) ? asset('public/img/patient-icon.png') : url('public/imgs/' . $nurse->Nurse->image) }}"
                                    class="img-profile img-fluid"></center>
                            <h4 class="text-center"><b>{{ $nurse->name }}</b></h4>
                            <hr>
                            @isset($nurse->Nurse->birthday)
                                <p><b>{{ __('sentence.Age') }} :</b> {{ $nurse->Nurse->birthday }}
                                    ({{ \Carbon\Carbon::parse($nurse->Nurse->birthday)->age }} Years)</p>
                            @endisset

                            @isset($nurse->Nurse->gender)
                                <p><b>{{ __('sentence.Gender') }} :</b> {{ __('sentence.' . $nurse->Nurse->gender) }}</p>
                            @endisset

                            @isset($nurse->Nurse->phone)
                                <p><b>{{ __('sentence.Phone') }} :</b> {{ $nurse->Nurse->phone }}</p>
                            @endisset

                            @isset($nurse->Nurse->address)
                                <p><b>{{ __('sentence.Address') }} :</b> {{ $nurse->Nurse->address }}</p>
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
