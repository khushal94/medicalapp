@extends('layouts.master')

@section('title')
    {{ __('sentence.All Nurse Bookings') }}
@endsection

@section('content')

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

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-8">
                    <h6 class="m-0 font-weight-bold text-primary w-75 p-2">{{ __('sentence.All Nurse Bookings') }}</h6>
                </div>
                <div class="col-4">
                    <a href="{{ route('coupon.create') }}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>
                        {{ __('sentence.New Nurse Booking') }}</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>{{ __('sentence.Nurse Name') }}</th>
                            <th>{{ __('sentence.Patient Name') }}</th>
                            <th>{{ __('sentence.Visiting Date') }}</th>
                            <th>{{ __('sentence.Visiting Time') }}</th>
                            <th>{{ __('sentence.Address') }}</th>
                            <th>{{ __('sentence.Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nursebookings as $nursebooking)
                            {{-- {{$nurse}} --}}
                            <tr class="text-center">
                                <td>
                                    <a href="{{ url('nursebooking/view/' . $nursebooking->id) }}">
                                        {{ $nursebooking->id }}
                                    </a>
                                </td>
                                <td>
                                    {{ $nursebooking->nurse_name }}
                                </td>
                                <td>
                                    @foreach ($patients as $patient)
                                        @if ($patient->id == $nursebooking->patient_id)
                                            {{ $patient->name }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    {{ date('d-m-Y', strtotime($nursebooking->visit_date)) }}
                                </td>
                                <td>
                                    {{ \Carbon\Carbon::createFromFormat('H:i:s', $nursebooking->visit_time)->format('h:m:s a') }}
                                </td>
                                <td>
                                    {{ $nursebooking->address }}
                                </td>
                                <td style="white-space:nowrap;">
                                    <a href="{{ url('nursebooking/view/' . $nursebooking->id) }}"
                                        class="btn btn-success btn-circle btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="{{ url('nursebooking/edit/' . $nursebooking->id) }}"
                                        class="btn btn-warning btn-circle btn-sm"><i class="fa fa-pen"></i></a>
                                    @if ($nursebooking->status == 0)
                                        <a href="{{ url('nursebooking/update/'. $nursebooking->id .'/' .$nursebooking->status) }}"
                                            class="btn btn-danger btn-circle btn-sm" title="inactive"><i
                                                class="fas fa-times"></i></a>
                                    @else
                                        <a href="{{ url('nursebooking/update/' . $nursebooking->id . '/' . $nursebooking->status) }}"
                                            class="btn btn-success btn-circle btn-sm" title="active"><i
                                                class="fas fa-check"></i></a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
