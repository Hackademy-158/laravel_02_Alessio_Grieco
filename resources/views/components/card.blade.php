
<div {{ $attributes->merge(['class' => 'card']) }}>
    @if($header)
        <div class="{{ $headerClass }}">
            {{ $header }}
        </div>
    @endif

    <div class="{{ $bodyClass }}">
        {{ $slot }}
    </div>

    @if($footer)
        <div class="{{ $footerClass }}">
            {{ $footer }}
        </div>
    @endif
</div>
