<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Isolate;
use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;
use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Isolate]
class Search extends Component
{
    #[Url(as: 'q', except: '')]
    public $searchText = '';

    public $placeholder;

    #[On('search:clear-results')]
    public function clear()
    {
        $this->reset('searchText');
    }

    // public function queryString()
    // {
    //     return [
    //         'searchText' => [
    //             'as' => 'q',
    //             'except' => '',
    //             'history' => true
    //         ]
    //     ];
    // }

    public function render()
    {
        return view('livewire.search', [
            'results' => Article::where('title', 'LIKE', "%{$this->searchText}%")->get(),
        ]);
    }
}
