@extends('layouts.master')

@section('title')
    {{ $nursebooking->id }}
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
                            <h4 class="text-center"><b>{{ $nursebooking->nurse_name }}</b></h4>
                            <hr>
                            @foreach ($patients as $patient)
                            @if ($nursebooking->patient_id == $patient->id)
                            <p><b>{{ __('sentence.Patient Name') }} :</b>{{ $patient->name }}</p>
                            @endif
                            @endforeach
                            @isset($nursebooking->visit_date)
                                <p><b>{{ __('sentence.Visiting Date') }} :</b> {{ date('d-m-Y', strtotime($nursebooking->visit_date)) }}</p>                                
                            @endisset
                            @isset($nursebooking->visit_time)
                                <p><b>{{ __('sentence.Visiting Time') }} :</b> {{ \Carbon\Carbon::createFromFormat('H:i:s', $nursebooking->visit_time)->format('h:m:s a') }}</p>                                
                            @endisset
                            @isset($nursebooking->address)
                                <p><b>{{ __('sentence.Address') }} :</b> {{ $nursebooking->address }}</p>                                
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
