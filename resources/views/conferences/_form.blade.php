<div class="mb-3">
    <label for="title" class="form-label">{{ __('messages.title') }} *</label>
    <input type="text" 
           class="form-control @error('title') is-invalid @enderror" 
           id="title" 
           name="title" 
           value="{{ old('title', $conference->title ?? '') }}" 
           required>
    @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">{{ __('messages.description') }} *</label>
    <textarea class="form-control @error('description') is-invalid @enderror" 
              id="description" 
              name="description" 
              rows="4" 
              required>{{ old('description', $conference->description ?? '') }}</textarea>
    @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="date" class="form-label">{{ __('messages.date') }} *</label>
    <input type="date" 
           class="form-control @error('date') is-invalid @enderror" 
           id="date" 
           name="date" 
           value="{{ old('date', isset($conference) ? $conference->date->format('Y-m-d') : '') }}" 
           required>
    @error('date')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="address" class="form-label">{{ __('messages.address') }} *</label>
    <input type="text" 
           class="form-control @error('address') is-invalid @enderror" 
           id="address" 
           name="address" 
           value="{{ old('address', $conference->address ?? '') }}" 
           required>
    @error('address')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="city" class="form-label">{{ __('messages.city') }}</label>
    <input type="text" 
           class="form-control @error('city') is-invalid @enderror" 
           id="city" 
           name="city" 
           value="{{ old('city', $conference->city ?? '') }}">
    @error('city')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="participant_count" class="form-label">{{ __('messages.participant_count') }}</label>
    <input type="number" 
           class="form-control @error('participant_count') is-invalid @enderror" 
           id="participant_count" 
           name="participant_count" 
           value="{{ old('participant_count', $conference->participant_count ?? '') }}" 
           min="0">
    @error('participant_count')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
