@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>{{ __('messages.conferences') }}</h1>
    @auth
        <a href="{{ route('conferences.create') }}" class="btn btn-success">
            {{ __('messages.create') }}
        </a>
    @endauth
</div>

@if($conferences->isEmpty())
    <div class="alert alert-info">
        {{ __('messages.no_conferences') }}
    </div>
@else
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>{{ __('messages.title') }}</th>
                    <th>{{ __('messages.date') }}</th>
                    <th>{{ __('messages.city') }}</th>
                    <th>{{ __('messages.participant_count') }}</th>
                    <th>{{ __('messages.actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($conferences as $conference)
                    <tr>
                        <td>{{ $conference->title }}</td>
                        <td>{{ $conference->date->format('Y-m-d') }}</td>
                        <td>{{ $conference->city ?? '-' }}</td>
                        <td>{{ $conference->participant_count ?? '-' }}</td>
                        <td>
                            <a href="{{ route('conferences.show', $conference) }}" 
                               class="btn btn-sm btn-info">
                                {{ __('messages.view') }}
                            </a>
                            @auth
                                <a href="{{ route('conferences.edit', $conference) }}" 
                                   class="btn btn-sm btn-warning">
                                    {{ __('messages.edit') }}
                                </a>
                                <form action="{{ route('conferences.destroy', $conference) }}" 
                                      method="POST" 
                                      class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" 
                                            class="btn btn-sm btn-danger delete-btn">
                                        {{ __('messages.delete') }}
                                    </button>
                                </form>
                            @endauth
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif
@endsection
