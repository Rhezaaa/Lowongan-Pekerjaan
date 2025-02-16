@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('create job') }}</h1>
                    <a href="{{ route('admin.jobs.index') }}" class="btn btn-success btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.jobs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="company">{{ __('company') }}</label>
                        <select class="form-control" name="company_id" id="company_id">
                            @foreach($companies as $company)
                                <option value="{{ $company->id }}">{{ $company->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="category">{{ __('category') }}</label>
                        <select class="form-control" name="category_id" id="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">{{ __('title') }}</label>
                        <input type="text" class="form-control" id="title" placeholder="{{ __('title') }}" name="title" value="{{ old('title') }}" />
                    </div>
                    <div class="form-group">
                        <label for="location">{{ __('location') }}</label>
                        <input type="text" class="form-control" id="location" placeholder="{{ __('location') }}" name="location" value="{{ old('location') }}" />
                    </div>
                    <div class="form-group">
                        <label for="exp_date">{{ __('exp_date') }}</label>
                        <input type="date" class="form-control" id="exp_date" placeholder="{{ __('exp_date') }}" name="exp_date" value="{{ old('exp_date') }}" />
                    </div>
                    <div class="form-group">
                        <label for="paycheck">{{ __('paycheck') }}</label>
                        <input type="string" class="form-control" id="paycheck" placeholder="{{ __('paycheck') }}" name="paycheck" value="{{ old('paycheck') }}" />
                    </div>
                    <div class="form-group">
                        <label for="description">{{ __('description') }}</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="job_nature">{{ __('job_nature') }}</label>
                        <select class="form-control" name="job_nature" id="job_nature">
                            <option value="Full Time">Full Time</option>
                            <option value="Part Time">Part Time</option>
                            <option value="Freelance">Freelance</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection

@push('style-alt')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('script-alt')
<script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous"
    >
    </script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
      $('.select-multiple').select2();
</script>
@endpush