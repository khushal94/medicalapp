@extends('layouts.master')

@section('title')
    {{ __('sentence.All Orders') }}
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
                    <h6 class="m-0 font-weight-bold text-primary w-75 p-2">{{ __('sentence.All Orders') }}</h6>
                </div>
                <div class="col-4">
                    <a href="{{ route('order.create') }}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>
                        {{ __('sentence.New Orders') }}</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>{{ __('sentence.Order Name') }}</th>
                            <th class="text-center">{{ __('sentence.Order Email') }}</th>
                            {{-- <th class="text-center">{{ __('sentence.Order Phone') }}</th> --}}
                            <th class="text-center">{{ __('sentence.Date') }}</th>
                            <th class="text-center">{{ __('sentence.Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            {{-- {{$nurse}} --}}
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td><a href="{{ url('order/view/' . $order->id) }}"> {{ $order->name }} </a></td>
                                <td class="text-center"> {{ $order->email }} </td>
                                {{-- <td class="text-center"> {{ $order->phone }} </td> --}}
                                <td class="text-center">{{ $order->created_at }}</td>
                                <td class="text-center">
                                    <a href="{{ url('order/view/' . $order->id) }}"
                                        class="btn btn-success btn-circle btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="{{ url('order/edit/' . $order->id) }}"
                                        class="btn btn-warning btn-circle btn-sm"><i class="fa fa-pen"></i></a>
                                    @if ($order->Is_paid == 0)
                                        <a href="{{ url('order/update/' . $order->id . '/' . $order->Is_paid) }}"
                                            class="btn btn-danger btn-circle btn-sm" title="inactive"><i
                                                class="fas fa-times"></i></a>
                                    @else
                                        <a href="{{ url('order/update/' . $order->id . '/' . $order->Is_paid) }}"
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
