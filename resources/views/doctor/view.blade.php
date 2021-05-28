@extends('layouts.master')

@section('title')
    {{ $doctor->name }}
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col">
            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <center><img src="{{ empty($doctor->Doctor->image) ? asset('img/patient-icon.png') : url('imgs/'.$doctor->Doctor->image) }}"
                                    class="img-profile rounded-circle img-fluid" style="width: 400px; height:400px"></center>
                            <h4 class="text-center"><b>{{ $doctor->name }}</b></h4>
                            <hr>
                            @isset($doctor->Doctor->birthday)
                                <p><b>{{ __('sentence.Age') }} :</b> {{ $doctor->Doctor->birthday }}
                                    ({{ \Carbon\Carbon::parse($doctor->Doctor->birthday)->age }} Years)</p>
                            @endisset

                            @isset($doctor->Doctor->gender)
                                <p><b>{{ __('sentence.Gender') }} :</b> {{ __('sentence.' . $doctor->Doctor->gender) }}</p>
                            @endisset

                            @isset($doctor->Doctor->phone)
                                <p><b>{{ __('sentence.Phone') }} :</b> {{ $doctor->Doctor->phone }}</p>
                            @endisset

                            @isset($doctor->Doctor->address)
                                <p><b>{{ __('sentence.Address') }} :</b> {{ $doctor->Doctor->address }}</p>
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
