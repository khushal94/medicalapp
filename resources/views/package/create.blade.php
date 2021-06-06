@extends('layouts.master')

@section('title')
    {{ __('sentence.New Package') }}
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
                    <h6 class="m-0 font-weight-bold text-primary">{{ __('sentence.New Package') }}</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('package.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="box">
                                    <div class="js--image-preview"></div>
                                    <div class="upload-options">
                                        <label>
                                            <input type="file" class="image-upload" accept="image/png, image/svg, image/jpeg" name="image" />
                                        </label>
                                    </div>
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
                                                placeholder="{{ __('sentence.Package Name') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="lab_name" class="col-form-label">{{ __('sentence.Lab Name') }}
                                                <font color="red">*</font>
                                            </label>
                                            <input type="text" class="form-control" id="lab_name" name="lab_name"
                                                placeholder="{{ __('sentence.Lab Name') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="rate" class="col-form-label">{{ __('sentence.Package Rate') }}
                                                <font color="red">*</font>
                                            </label>
                                            <input type="text" class="form-control" id="rate" name="rate"
                                                placeholder="{{ __('sentence.Package Rate') }}">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="lab_test_ids " class="col-form-label">{{ __('sentence.Test') }}
                                                <font color="red">*</font>
                                            </label>
                                            <select class="form-control" name="lab_test_ids">
                                                <option value="" selected disabled>Select Test</option>
                                                @foreach ($tests as $test)
                                                    <option value="{{ $test->id }}">{{ $test->test_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label for="description"
                                                class="col-form-label">{{ __('sentence.Description') }}</label>
                                            <textarea rows="4" class="form-control" id="description" name="description" placeholder="{{ __('sentence.Description') }}"></textarea>
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
{{-- name, description, lab_name, lab_test_ids, image, rate, is_active --}}
