<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <input type="{{ $type == "" ? "text" : $type }}" class="form-control fw-bold @error($name) is-invalid @enderror" id="{{ $name }}"
        name="{{ $name }}" value="{{ $value }}" required="{{ $required == "" ? "" : "required" }}">

    @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
