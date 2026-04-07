{{-- props highlight with default value of false --}}
@props(["highlight" => false])

{{-- add a class of highlight to this element when the highlight props is true --}}
<div @class(['highlight' => $highlight, 'card'])>
    {{ $slot }}
    <a {{ $attributes }} class="btn">View Details</a>
</div>
