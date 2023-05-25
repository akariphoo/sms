@extends('admin-site.app')

@section('content')
    <a href="{{ route('user.index') }}" class="btn btn-primary float-right btn-icon-text"><i class="icon-rewind"></i> Back</a>
    <div class="col-md-10 p-5">
        <div class="text-center pb-5"><span class="title_text_size">{{ __($title) }}</span></div>
        @include('admin-site.pages.users.forms.create')
    </div>
@endsection