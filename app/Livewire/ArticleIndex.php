<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Articles')]
class ArticleIndex extends Component
{
    use WithPagination;
    // public $articles = [];

    // public function mount()
    // {
    //     $this->articles = Article::all();
    // }

    public function render()
    {
        return view(
            'livewire.article-index',
            [
                'articles' => Article::paginate(10)
            ]
        );
    }
}
