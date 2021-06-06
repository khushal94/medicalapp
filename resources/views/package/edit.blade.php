@extends('layouts.master')

@section('title')
    {{ __('sentence.Edit Package') }}
@endsection

@section('content')
    <div class="row">
        <div class="col">
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
        </div>

    </div>
    <div class="row justify-content-center">


        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ __('sentence.Edit Package') }}</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('package.store_edit') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="uploadbox">
                                    <label class="upload_image">
                                        <img src="{{ empty($package->image) ? url('public/imgs/no-image.png') : url('public/imgs/' . $package->image) }}"
                                            alt="Upload Image" title="Upload Image">
                                        <input type="file" name="image" accept="image/png, image/svg, image/jpeg" id="image"
                                            style="display: none">
                                    </label>
                                    <label for="image" class="btn btn-primary btn-block btn-upload">Upload</label>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="name" class="col-form-label">{{ __('sentence.Package Name') }}
                                                <font color="red">*</font>
                                            </label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                value="{{ $package->name }}">
                                            <input type="hidden" class="form-control" id="id" name="id"
                                                value="{{ $package->id }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="lab_name" class="col-form-label">{{ __('sentence.Lab Name') }}
                                                <font color="red">*</font>
                                            </label>
                                            <input type="text" class="form-control" id="lab_name" name="lab_name"
                                                value="{{ $package->lab_name }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="rate" class="col-form-label">{{ __('sentence.Package Rate') }}
                                                <font color="red">*
                                                </font>
                                            </label>
                                            <input type="number" class="form-control" id="rate" name="rate"
                                                autocomplete="off" value="{{ $package->rate }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="lab_test_ids" class="col-form-label">{{ __('sentence.Test') }}
                                                <font color="red">*</font>
                                            </label>
                                            <select class="form-control" name="lab_test_ids">
                                                {{-- <option value="{{ $package->lab_test_ids }}" selected="selected" disabled>
                                                    @foreach ($tests as $test)
                                                        @if ($test->id == $package->lab_test_ids)
                                                            {{ $test->test_name }}
                                                        @else
                                                        @endif
                                                    @endforeach
                                                </option> --}}
                                                @foreach ($tests as $test)
                                                    <option value="{{ $test->id }}" @if ($test->id == $package->lab_test_ids) selected
                                                    @else @endif>{{ $test->test_name }}
                                                        </option> @endforeach </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="description"
                                                class="col-form-label">{{ __('sentence.Description') }}</label>
                                            <textarea rows="4" class="form-control" id="description"
                                                name="description">{{ $package->description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="text-right">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">{{ __('sentence.Save') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>

@endsection

@section('header')

@endsection

@section('footer')

@endsection
