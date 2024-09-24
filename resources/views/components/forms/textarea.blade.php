<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <textarea name="{{ $name }}" id="{{ $name }}"
        class="form-control fw-bold @error($name) is-invalid @enderror" required="{{ $required == '' ? '' : 'required' }}">{{ $value }}</textarea>

    @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
