@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('create company') }}</h1>
                    <a href="{{ route('admin.companies.index') }}" class="btn btn-success btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.companies.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">{{ __('name') }}</label>
                        <input type="text" class="form-control" id="name" placeholder="{{ __('name') }}" name="name" value="{{ old('name') }}" />
                    </div>
                    <div class="form-group">
                        <label for="email">{{ __('email') }}</label>
                        <input type="text" class="form-control" id="email" placeholder="{{ __('email') }}" name="email" value="{{ old('email') }}" />
                    </div>
                    <div class="form-group">
                        <label for="website">{{ __('website') }}</label>
                        <input type="url" class="form-control" id="website" placeholder="{{ __('website') }}" name="website" value="{{ old('website') }}" />
                    </div>
                    <div class="form-group">
                        <label for="description">{{ __('description') }}</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="logo">{{ __('logo') }}</label>
                        <input type="file" class="form-control" id="logo" placeholder="{{ __('logo') }}" name="logo" value="{{ old('logo') }}" />
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