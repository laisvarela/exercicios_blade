<a href="{{ $attributes->get('href', '#') }}" class="btn btn-primary">
    @if ($slot->isNotEmpty())
        <span class="icon">{{ $slot }}</span>
    @endif
    {{ $text }} 
</a>