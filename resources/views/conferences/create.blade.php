@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>{{ __('messages.create_conference') }}</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('conferences.store') }}" method="POST">
            @csrf
            @include('conferences._form')
            <div class="mt-4">
                <button type="submit" class="btn btn-success">
                    {{ __('messages.add') }}
                </button>
                <a href="{{ route('conferences.index') }}" class="btn btn-secondary">
                    {{ __('messages.cancel') }}
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
