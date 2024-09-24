<div class="mb-3">
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    {{-- <input type="{{ $type == "" ? "text" : $type }}" class="form-control @error($name) is-invalid @enderror" id="{{ $name }}"
        name="{{ $name }}" value="{{ $value }}"> --}}
    <select name="{{ $name }}" id="{{ $name }}" class="form-control fw-bold @error($name) is-invalid @enderror" required="{{ $required == "" ? "" : "required" }}">
        {{ $slot }}
    </select>

    @error($name)
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
