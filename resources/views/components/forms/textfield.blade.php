@props(['label', 'name', 'type' => 'text', 'value' => ''])

<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <input value="{{ $value }}" name="{{ $name }}" type="text"
        class="form-control @error($name)
    is-invalid
    @enderror" id="{{ $name }}">
    @error($name)
        <div id="" class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
