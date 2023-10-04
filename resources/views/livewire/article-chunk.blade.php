<div class="space-y-8">
    @foreach ($articles as $article)
        <div>
            <h2 class="font-bold text-xl">#{{ $article->id }} {{ $article->title }}</h2>
            <p>{{ $article->teaser }}</p>
        </div>
    @endforeach
</div>
