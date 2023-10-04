<div>
    <div class="space-y-8">
        @for ($chunk = 0; $chunk < $page; $chunk++)
            <livewire:article-chunk :ids="$chunks[$chunk]" :key="$chunk" />
        @endfor
    </div>

    @if ($this->hasMorePages())
        <div x-intersect="$wire.loadMore" class="-translate-y-32"></div>
    @endif

    @if ($this->hasMorePages())
        <button wire:click="loadMore">Load more</button>
    @endif
</div>
