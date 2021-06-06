@extends('layouts.master')

@section('title')
    {{ __('sentence.All Packages') }}
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
                    <h6 class="m-0 font-weight-bold text-primary w-75 p-2">{{ __('sentence.All Packages') }}</h6>
                </div>
                <div class="col-4">
                    <a href="{{ route('package.create') }}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>
                        {{ __('sentence.New Packages') }}</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>{{ __('sentence.Package Name') }}</th>
                            <th class="text-center">{{ __('sentence.Image') }}</th>
                            <th class="text-center">{{ __('sentence.Labs Name') }}</th>
                            <th class="text-center">{{ __('sentence.Test Name') }}</th>
                            <th class="text-center">{{ __('sentence.Rate') }}</th>
                            <th class="text-center">{{ __('sentence.Description') }}</th>
                            <th class="text-center">{{ __('sentence.Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($packages as $package)
                            {{-- {{$nurse}} --}}
                            <tr>
                                <td>{{ $package->id }}</td>
                                <td><a href="{{ url('package/view/' . $package->id) }}"> {{ $package->name }} </a></td>
                                <td class="text-center"><img
                                    src="{{ empty($package->image) ? url('public/imgs/no-image.png') : url('public/imgs/' . $package->image) }}"
                                    style="width: 200px;height:200px;object-fit:cover"></td>
                                <td class="text-center"> {{ $package->lab_name }} </td>
                                <td class="text-center"> {{ $package->test_name }} </td>
                                <td class="text-center"> {{ $package->rate }} </td>
                                <td class="text-center">{{ \Illuminate\Support\Str::limit($package->description, 80, '...') }}</td>
                                <td class="text-center">
                                    <a href="{{ url('package/view/' . $package->id) }}"
                                        class="btn btn-success btn-circle btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="{{ url('package/edit/' . $package->id) }}"
                                        class="btn btn-warning btn-circle btn-sm"><i class="fa fa-pen"></i></a>
                                    @if ($package->is_active == 0)
                                        <a href="{{ url('package/update/' . $package->id . '/' . $package->is_active) }}"
                                            class="btn btn-danger btn-circle btn-sm" title="inactive"><i
                                                class="fas fa-times"></i></a>
                                    @else
                                        <a href="{{ url('package/update/' . $package->id . '/' . $package->is_active) }}"
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
