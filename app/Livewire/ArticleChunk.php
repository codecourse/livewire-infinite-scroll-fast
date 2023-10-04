<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleChunk extends Component
{
    public array $ids = [];

    public function render()
    {
        return view('livewire.article-chunk', [
            'articles' => Article::query()
                ->whereIn('id', $this->ids)
                ->orderByRaw("FIELD(id, " . implode(',', $this->ids) . ")")
                ->get(),
        ]);
    }
}
