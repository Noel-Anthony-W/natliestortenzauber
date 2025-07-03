@props(['field' => '', 'fieldName' => 'Name', 'type' => 'text', 'required' => false, 'options' => []])
<div class="input">
    <label for="{{ $field }}">{{ $fieldName }}:</label>
    <select class="input-textbox" id="{{ $field }}" name="{{ $field }}" @if($required) required @endif>
        @foreach($options as $option) {{-- Corrected $optiion to $option --}}
            <option value="{{ $option }}">{{ $option }}</option> {{-- Corrected <options> to <option> and removed extra '>' --}}
        @endforeach
    </select>
    @if($errors->has($field))
        <span class="error-message">{{ $errors->first($field) }}</span>
    @endif
</div>
