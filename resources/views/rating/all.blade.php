@extends('layouts.master')

@section('title')
    {{ __('sentence.All Ratings And Reviews') }}
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
    <!-- DataTales  -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-12">
                    <h6 class="m-0 font-weight-bold text-primary w-75 p-2">{{ __('sentence.All Ratings And Reviews') }}
                    </h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th>{{ __('sentence.User Name') }}</th>
                            {{-- <th>{{ __('sentence.Rating Name') }}</th> --}}
                            <th>{{ __('sentence.Count') }}</th>
                            <th class="text-center">{{ __('sentence.Feedback') }}</th>
                            <th class="text-center">{{ __('sentence.Created at') }}</th>
                            <th class="text-center">{{ __('sentence.Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ratings as $rating)
                            <tr>
                                <td class="text-center">{{ $rating->id }}</td>
                                <td> {{ $rating->name }}</td>
                                <td> {{ $rating->count->format('d M Y') }} </td>
                                <td> {{ $rating->feedback }} - {{ $rating->feedback }}</td>
                                <td class="text-center">{{ $rating->created_at->format('d M Y H:i') }}</td>
                                <td>
                                    @if ($rating->is_deleted == 0)
                                        <a href="{{ url('rating/update/' . $rating->id . '/' . $rating->is_deleted) }}"
                                            class="btn btn-danger btn-circle btn-sm" title="inactive"><i
                                                class="fas fa-times"></i></a>
                                    @else
                                        <a href="{{ url('rating/update/' . $rating->id . '/' . $rating->is_deleted) }}"
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

@section('header')

@endsection

@section('footer')

@endsection
