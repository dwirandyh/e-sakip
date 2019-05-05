<?php
/**
 * Variable = ['title' => '', 'type' => '', 'name' => '', 'placeholder' => '', 'value']
 */
?>
<div class="form-group">
    <label>{{ $title }}</label>
    <input type="{{ $type }}" class="{{ ($type != 'file') ? 'form-control' : '' }}" name="{{ $name }}"
           placeholder="{{ $placeholder }}" value="{{ (isset($value) ? $value : '') }}">

    <span class="help-block">
        @if ($errors->has($name))
            <span class="text-red" role="alert">
                <strong>{{ $errors->first($name) }}</strong>
            </span>
        @else
            @if (isset($isRequried) && $isRequried == true)
                Required
            @endif
        @endif
    </span>
</div>