@extends('layouts.master')

@section('title')
    {{ __('sentence.All Doctors') }}
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
                    <h6 class="m-0 font-weight-bold text-primary w-75 p-2">{{ __('sentence.All Doctors') }}</h6>
                </div>
                <div class="col-4">
                    <a href="{{ route('doctor.create') }}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>
                        {{ __('sentence.New Doctor') }}</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>{{ __('sentence.Doctor Name') }}</th>
                            <th class="text-center">{{ __('sentence.Email') }}</th>
                            <th class="text-center">{{ __('sentence.Image') }}</th>
                            <th class="text-center">{{ __('sentence.Phone') }}</th>
                            <th class="text-center">{{ __('sentence.City') }}</th>
                            <th class="text-center">{{ __('sentence.State') }}</th>
                            <th class="text-center">{{ __('sentence.Country') }}</th>
                            <th class="text-center">{{ __('sentence.Patients') }}</th>
                            <th class="text-center">{{ __('sentence.Speciality') }}</th>
                            <th class="text-center">{{ __('sentence.Experience') }}</th>
                            <th class="text-center">{{ __('sentence.Date') }}</th>
                            <th class="text-center">{{ __('sentence.Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($doctors as $doctor)
                            {{-- {{$nurse}} --}}
                            <tr>
                                <td>{{ $doctor->id }}</td>
                                <td><a href="{{ url('doctor/view/' . $doctor->id) }}"> {{ $doctor->name }} </a></td>
                                <td class="text-center"> {{ $doctor->email }} </td>
                                <td class="text-center"><img src="{{ empty($doctor->image) ? url('public/imgs/no-image.png') : url('public/imgs/' . $doctor->image) }}"
                                        style="width: 100px;height:100px;object-fit:cover"></td>
                                <td class="text-center"> {{ $doctor->phone }} </td>
                                <td class="text-center"> {{ $doctor->city }} </td>
                                <td class="text-center"> {{ $doctor->state }} </td>
                                <td class="text-center"> {{ $doctor->country }} </td>
                                <td class="text-center"> {{ $doctor->patient?$doctor->patient:0 }} </td>
                                <td class="text-center"> {{ $doctor->speciality }} </td>
                                <td class="text-center"> {{ $doctor->experience }} </td>
                                <td class="text-center">{{ $doctor->created_at->format('d M Y H:i') }}</td>
                                <td class="text-center" style="white-space:nowrap;">
                                    <a href="{{ url('doctor/view/' . $doctor->user_id) }}"
                                        class="btn btn-success btn-circle btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="{{ url('doctor/edit/' . $doctor->user_id) }}"
                                        class="btn btn-warning btn-circle btn-sm"><i class="fa fa-pen"></i></a>
                                    @if ($doctor->is_deleted == 0)
                                        <a href="{{ url('doctor/update/' . $doctor->id . '/' . $doctor->is_deleted) }}"
                                            class="btn btn-danger btn-circle btn-sm" title="inactive"><i
                                                class="fas fa-times"></i></a>
                                    @else
                                        <a href="{{ url('doctor/update/' . $doctor->id . '/' . $doctor->is_deleted) }}"
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
