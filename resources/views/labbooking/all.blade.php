@extends('layouts.master')

@section('title')
{{ __('sentence.All Lab Bookings') }}
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
                <h6 class="m-0 font-weight-bold text-primary w-75 p-2">{{ __('sentence.All Lab Bookings') }}</h6>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>{{ __('sentence.User Name') }}</th>
                        <th class="text-center">{{ __('sentence.Payment Id') }}</th>
                        <th class="text-center">{{ __('sentence.Is Paid') }}</th>
                        <th class="text-center">{{ __('sentence.Package Id') }}</th>
                        <th class="text-center">{{ __('sentence.Package Selected') }}</th>
                        <th class="text-center">{{ __('sentence.Status') }}</th>
                        <th class="text-center">{{ __('sentence.Date') }}</th>
                        <!-- <th class="text-center">{{ __('sentence.Actions') }}</th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($labbookings as $labbooking)
                    <tr>
                        <td>{{ $labbooking->id }}</td>
                        <td><a> {{ $labbooking->user_name }} </a></td>
                        <td class="text-center">{{ $labbooking->payment_id }}</td>
                        <td class="text-center">
                            @if ($labbooking->is_paid)
                            Yes
                            @else
                            No
                            @endif
                        </td>
                        <td class="text-center">{{ $labbooking->package_id }}</td>
                        <td class="text-center">
                        @if ($labbooking->package_selected)
                            Yes
                            @else
                            No
                            @endif
                        </td>
                        <td class="text-center">{{ $labbooking->status }}</td>
                        <td class="text-center">{{ $labbooking->created_at->format('d M Y H:i') }}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection