<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Title;

#[Title('Manage Articles')]
class ArticleList extends AdminComponent
{

    // public $articles = [];

    // public function mount()
    // {
    //     $this->articles = Article::all();
    // }

    public function delete(Article $article)
    {
        $article->delete();
    }

    public function render()
    {
        return view(
            'livewire.article-list',
            [

                'articles' => Article::all()
            ]
        );
    }
}
