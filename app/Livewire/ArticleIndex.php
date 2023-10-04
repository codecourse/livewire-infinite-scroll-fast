<?php

namespace App\Livewire;

use App\Models\Article;
use Illuminate\Support\Collection;
use Livewire\Component;

class ArticleIndex extends Component
{
    public array $chunks = [];

    public int $page = 1;

    public function mount()
    {
        $this->chunks = Article::latest()->pluck('id')->chunk(10)->toArray();
    }

    public function hasMorePages()
    {
        return $this->page < count($this->chunks);
    }

    public function loadMore()
    {
        if (!$this->hasMorePages()) {
            return;
        }

        $this->page = $this->page + 1;
    }

    public function render()
    {
        return view('livewire.article-index');
    }
}
