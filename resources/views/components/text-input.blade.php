@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-[#F4C38F] border focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
