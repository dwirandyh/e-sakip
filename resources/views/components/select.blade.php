<?php
/**
 * Variable = ['title' => '', 'name' => '', 'isRequired => false, 'options' => [], 'value' => '']
 */
?>
<div class="form-group">
    <label>{{ $title }}</label>
    <select name="{{ $name }}" class="form-control">
        @if(array_keys($options) !== range(0, count($options) - 1))
            @foreach ($options as $key => $val)
                <option value="{{ $key }}" {{ (isset($value) && $value == $key) ? 'selected' : '' }}>{{ $val }}</option>
            @endforeach
        @else
            @foreach ($options as $option)
                <option value="{{ $option }}" {{ (isset($value) && $value == $option) ? 'selected' : '' }}>{{ $option }}</option>
            @endforeach
        @endif
    </select>
    <span class="help-block">
        @if ($errors->has($name))
            <span class="text-red" role="alert">
                <strong>{{ $errors->first($name) }}</strong>
            </span>
        @else
            Required
        @endif
    </span>
</div>