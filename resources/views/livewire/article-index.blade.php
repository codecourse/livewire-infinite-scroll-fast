<div>
    @for ($chunk = 0; $chunk < $page; $chunk++)
        {{ $chunk }}
    @endfor

    @if ($this->hasMorePages())
        <button wire:click="loadMore">Load more</button>
    @endif
</div>
