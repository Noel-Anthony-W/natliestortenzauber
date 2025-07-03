@props(['field' => '', 'fieldName' => 'Name', 'type' => 'text', 'required' => false, 'rows' => 1])
<div class="input">
    <label for="{{ $field }}">{{ $fieldName }}:</label>

    @if ($type === 'textarea')
        <textarea
            {{ $attributes->merge([
                'id' => $field,
                'class' => 'input-textbox',
                'name' => $field,
                'rows' => $rows,
                'placeholder' => $fieldName,
                'required' => $required ? 'required' : '',
            ]) }}
        >{{ old($field) }}</textarea>
    @else
        <input
            {{ $attributes->merge([
                'id' => $field,
                'class' => 'input-textbox',
                'type' => $type,
                'name' => $field,
                'value' => old($field),
                'placeholder' => $fieldName,
                'required' => $required ? 'required' : '',
            ]) }}
        >
    @endif
</div>
