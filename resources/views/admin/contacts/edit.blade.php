@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Content Row -->
    <div class="card">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-gray">
                {{ __('Edit Contact') }}
            </h6>
            <a href="{{ route('admin.contacts.index') }}" class="btn btn-success btn-sm shadow-sm ml-auto">
                {{ __('Go Back') }}
            </a>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.contacts.update', $contact->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">{{ __('Name') }}</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{ old('name', $contact->name) }}" required />
                </div>
                <div class="form-group">
                    <label for="email">{{ __('Email') }}</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{ old('email', $contact->email) }}" required />
                </div>
                <div class="form-group">
                    <label for="subject">{{ __('Subject') }}</label>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter subject" value="{{ old('subject', $contact->subject) }}" required />
                </div>
                <div class="form-group">
                    <label for="message">{{ __('Message') }}</label>
                    <textarea class="form-control" id="message" name="message" rows="4" placeholder="Enter message">{{ old('message', $contact->message) }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">
                    {{ __('Save Changes') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

@push('style-alt')
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('script-alt')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $('.select-multiple').select2();
</script>
@endpush
