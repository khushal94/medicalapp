@extends('layouts.master')

@section('title')
    {{ __('sentence.All Nurses') }}
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
                    <h6 class="m-0 font-weight-bold text-primary w-75 p-2">{{ __('sentence.All Nurses') }}</h6>
                </div>
                <div class="col-4">
                    <a href="{{ route('nurse.create') }}" class="btn btn-primary float-right"><i class="fa fa-plus"></i>
                        {{ __('sentence.New Nurses') }}</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>{{ __('sentence.Nurse Name') }}</th>
                            <th class="text-center">{{ __('sentence.Email') }}</th>
                            <th class="text-center">{{ __('sentence.Image') }}</th>
                            <th class="text-center">{{ __('sentence.Phone') }}</th>
                            <th class="text-center">{{ __('sentence.City') }}</th>
                            <th class="text-center">{{ __('sentence.State') }}</th>
                            <th class="text-center">{{ __('sentence.Country') }}</th>
                            <th class="text-center">{{ __('sentence.Patients') }}</th>
                            <th class="text-center">{{ __('sentence.Qualification') }}</th>
                            <th class="text-center">{{ __('sentence.Date') }}</th>
                            <th class="text-center">{{ __('sentence.Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nurses as $nurse)
                            {{-- {{$nurse}} --}}
                            <tr>
                                <td>{{ $nurse->id }}</td>
                                <td><a href="{{ url('nurse/view/' . $nurse->id) }}"> {{ $nurse->name }} </a></td>
                                <td class="text-center"> {{ $nurse->email }} </td>
                                <td class="text-center"><img
                                        src="{{ empty($nurse->Nurse->image) ? url('public/imgs/no-image.png') : url('public/imgs/' . $nurse->Nurse->image) }}"
                                        style="width: 100px;height:100px;object-fit:cover"></td>
                                <td class="text-center"> {{ $nurse->Nurse->phone }} </td>
                                <td class="text-center"> {{ $nurse->Nurse->city }} </td>
                                <td class="text-center"> {{ $nurse->Nurse->state }} </td>
                                <td class="text-center"> {{ $nurse->Nurse->country }} </td>
                                <td class="text-center"> {{ $nurse->Nurse->patient?$doctor->patient:0 }} </td>
                                <td class="text-center"> {{ $nurse->Nurse->qualification }} </td>
                                <td class="text-center">{{ $nurse->created_at->format('d M Y H:i') }}</td>
                                <td class="text-center" style="white-space:nowrap;">
                                    <a href="{{ url('nurse/view/' . $nurse->id) }}"
                                        class="btn btn-success btn-circle btn-sm"><i class="fa fa-eye"></i></a>
                                    <a href="{{ url('nurse/edit/' . $nurse->id) }}"
                                        class="btn btn-warning btn-circle btn-sm"><i class="fa fa-pen"></i></a>
                                    @if ($nurse->Nurse->is_deleted == 0)
                                        <a href="{{ url('nurse/update/' . $nurse->id . '/' . $nurse->Nurse->is_deleted) }}"
                                            class="btn btn-danger btn-circle btn-sm" title="inactive"><i
                                                class="fas fa-times"></i></a>
                                    @else
                                        <a href="{{ url('nurse/update/' . $nurse->id . '/' . $nurse->Nurse->is_deleted) }}"
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
