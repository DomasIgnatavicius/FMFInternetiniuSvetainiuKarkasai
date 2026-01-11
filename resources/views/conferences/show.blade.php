@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>{{ $conference->title }}</h2>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-3 fw-bold">{{ __('messages.description') }}:</div>
            <div class="col-md-9">{{ $conference->description }}</div>
        </div>
        <div class="row mb-3">
            <div class="col-md-3 fw-bold">{{ __('messages.date') }}:</div>
            <div class="col-md-9">{{ $conference->date->format('Y-m-d') }}</div>
        </div>
        <div class="row mb-3">
            <div class="col-md-3 fw-bold">{{ __('messages.address') }}:</div>
            <div class="col-md-9">{{ $conference->address }}</div>
        </div>
        @if($conference->city)
        <div class="row mb-3">
            <div class="col-md-3 fw-bold">{{ __('messages.city') }}:</div>
            <div class="col-md-9">{{ $conference->city }}</div>
        </div>
        @endif
        @if($conference->participant_count)
        <div class="row mb-3">
            <div class="col-md-3 fw-bold">{{ __('messages.participant_count') }}:</div>
            <div class="col-md-9">{{ $conference->participant_count }}</div>
        </div>
        @endif
    </div>
    <div class="card-footer">
        <a href="{{ route('conferences.index') }}" class="btn btn-secondary">
            {{ __('messages.back') }}
        </a>
        @auth
            <a href="{{ route('conferences.edit', $conference) }}" class="btn btn-warning">
                {{ __('messages.edit') }}
            </a>
        @endauth
    </div>
</div>
@endsection
