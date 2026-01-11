@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>{{ __('messages.edit_conference') }}</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('conferences.update', $conference) }}" method="POST">
            @csrf
            @method('PUT')
            @include('conferences._form')
            <div class="mt-4">
                <button type="submit" class="btn btn-warning">
                    {{ __('messages.update') }}
                </button>
                <a href="{{ route('conferences.index') }}" class="btn btn-secondary">
                    {{ __('messages.cancel') }}
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
