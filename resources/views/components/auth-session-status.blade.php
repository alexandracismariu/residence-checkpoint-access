@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'text-sm text-green-600 font-medium']) }}>
        {{ $status }}
    </div>
@endif
