@extends('layouts.master')

@section('title')
    {{ $coupon->name }}
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col">
            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <center><img src="{{ empty($coupon->image) ? asset('public/img/patient-icon.png') : url('public/imgs/' . $coupon->image) }}"
                                    class="img-profile rounded-circle img-fluid"></center>
                            <h4 class="text-center"><b>{{ $coupon->name }}</b></h4>
                            <hr>
                            @isset($coupon->code)
                                <p><b>{{ __('sentence.Coupon Code') }} :</b> {{ $coupon->code }}</p>
                            @endisset

                            @isset($coupon->discount_type)
                                <p><b>{{ __('sentence.Discount Type') }} :</b> {{ $coupon->discount_type == 'P' ? __('sentence.Percentage') : __('sentence.Amount') }}</p>
                            @endisset

                            @isset($coupon->discount_amount)
                                <p><b>{{ __('sentence.Discount Amount') }} :</b> {{ __('sentence.' . $coupon->discount_amount) }}</p>
                            @endisset

                            @isset($coupon->startingdate)
                                <p><b>{{ __('sentence.Starting Date') }} :</b> {{ $coupon->startingdate }}</p>
                            @endisset

                            @isset($coupon->endingdate)
                                <p><b>{{ __('sentence.Ending Date') }} :</b> {{ $coupon->endingdate }}</p>
                            @endisset

                            @isset($coupon->minimum_amount)
                                <p><b>{{ __('sentence.Minimum Amount') }} :</b> {{ $coupon->minimum_amount }}</p>
                            @endisset
                            @isset($coupon->category)
                                <p><b>{{ __('sentence.Category') }} :</b> 
                                    {{ 
                                        $coupon->category
                                    }}
                                </p>
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
