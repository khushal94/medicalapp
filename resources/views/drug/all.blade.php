@extends('layouts.master')

@section('title')
{{ __('sentence.All Drugs') }}
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
            <div class="col-9">
                <h6 class="m-0 font-weight-bold text-primary w-75 p-2">{{ __('sentence.All Drugs') }}</h6>
            </div>
            <div class="col-3">
                <div class="text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        {{ __('sentence.Import Drug') }}</button>
                    <a href="{{ route('drug.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>
                        {{ __('sentence.Add Drug') }}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>{{ __('sentence.Trade Name') }}</th>
                        <th>{{ __('sentence.Generic Name') }}</th>
                        <th>{{ __('sentence.Note') }}</th>
                        <th>{{ __('sentence.Rate') }}</th>
                        <th>{{ __('sentence.Type of Sell') }}</th>
                        <th>{{ __('sentence.Manufacturer') }}</th>
                        <th>{{ __('sentence.Country of origin') }}</th>
                        <th>{{ __('sentence.Salt') }}</th>
                        <th>{{ __('sentence.Uses of (Medicine name)') }}</th>
                        {{--<th>{{ __('sentence.Side Effects') }}</th> --}}                       
                        <th class="text-center">{{ __('sentence.Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($drugs as $drug)
                    <tr>
                        <td>{{ $drug->id }}</td>
                        <td>{{ $drug->trade_name }}</td>
                        <td>{{ $drug->generic_name }}</td>
                        <td>{{ $drug->note }}</td>
                        <td>{{ $drug->rate }}</td>
                        <td>{{ $drug->type_sell }}</td>
                        <td>{{ $drug->manufacturer }}</td>
                        <td>{{ $drug->country_origin }}</td>
                        <td>{{ $drug->salt }}</td>
                        <td>{{ $drug->uses }}</td>
                        {{--<td>{{ $drug->side_effect }}</td>--}}
                        <td class="text-center">
                            <a href="{{ url('drug/edit/'.$drug->id) }}" class="btn btn-warning btn-circle btn-sm"><i
                                    class="fa fa-pen"></i></a>
                            <a href="{{ url('drug/delete/'.$drug->id) }}" class="btn btn-danger btn-circle btn-sm"><i
                                    class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('drug.import') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import Excel File</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="">Please Upload File</label>
                    <input type="file" name="file" accept="xlsx," class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection