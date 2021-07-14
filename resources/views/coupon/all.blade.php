@extends('layouts.master')

@section('title')
    {{ __('sentence.All Coupons') }}
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
                    <h6 class="m-0 font-weight-bold text-primary w-75 p-2">{{ __('sentence.All Coupons') }}</h6>
                </div>
                <div class="col-4">
                    <a href="{{ route('coupon.create') }}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>
                        {{ __('sentence.New Coupons') }}</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>{{ __('sentence.Coupon Name') }}</th>
                            <th class="text-center">{{ __('sentence.Image') }}</th>
                            <th class="text-center">{{ __('sentence.Coupon Code') }}</th>
                            <th class="text-center">{{ __('sentence.Category') }}</th>
                            <th class="text-center">{{ __('sentence.Discount Type') }}</th>
                            <th class="text-center">{{ __('sentence.Discount Amount') }}</th>
                            <th class="text-center">{{ __('sentence.Starting Date') }}</th>
                            <th class="text-center">{{ __('sentence.Ending Date') }}</th>
                            <th class="text-center">{{ __('sentence.Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($coupons as $coupon)
                            {{-- {{$nurse}} --}}
                            <tr>
                                <td>{{ $coupon->id }}</td>
                                <td><a href="{{ url('coupon/view/' . $coupon->id) }}"> {{ $coupon->name }} </a></td>
                                <td class="text-center"><img
                                    src="{{ empty($coupon->image) ? url('public/imgs/no-image.png') : url('public/imgs/' . $coupon->image) }}"
                                    style="width: 200px;height:200px;object-fit:cover"></td>
                                <td class="text-center"> {{ $coupon->code }} </td>
                                <td class="text-center"> 
                                    @if($coupon->category == 'appointment')
                                        {{ __('sentence.Appointment') }} 
                                    @elseif($coupon->category == 'nurse-visit' )
                                        {{ __('sentence.Nurse Visit') }}
                                    @elseif($coupon->category == 'lab-test' )
                                        {{ __('sentence.Lab Test') }}
                                    @elseif($coupon->category == 'package' )
                                        {{ __('sentence.Package') }}   
                                    @else
                                        -                                                    
                                    @endif  
                                 </td>
                                <td class="text-center"> 
                                  @if($coupon->discount_type == 'A')
                                    Amount
                                  @else
                                    Percentage
                                  @endif
                                </td>
                                <td class="text-center"> {{ $coupon->discount_amount }} </td>
                                <td class="text-center">{{ $coupon->startingdate }}</td>
                                <td class="text-center">{{ $coupon->endingdate }}</td>
                                <td class="text-center">
                                    <a href="{{ url('coupon/view/' . $coupon->id) }}"
                                        class="btn btn-success btn-circle btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="{{ url('coupon/edit/' . $coupon->id) }}"
                                        class="btn btn-warning btn-circle btn-sm"><i class="fa fa-pen"></i></a>
                                    @if ($coupon->is_deleted == 0)
                                        <a href="{{ url('coupon/update/' . $coupon->id . '/' . $coupon->is_deleted) }}"
                                            class="btn btn-danger btn-circle btn-sm" title="inactive"><i
                                                class="fas fa-times"></i></a>
                                    @else
                                        <a href="{{ url('coupon/update/' . $coupon->id . '/' . $coupon->is_deleted) }}"
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
