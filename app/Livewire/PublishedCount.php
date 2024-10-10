<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy]
class PublishedCount extends Component
{
    public $count = 0;

    public function mount()
    {
        sleep(2);
        $this->count = Article::where('published', 'true')->count();
    }

    public function placeholder()
    {
        return view('livewire.placeholder', [
            'message' => 'Published count is loading...'
        ]);
    }

    public function render()
    {
        return view('livewire.published-count');
    }
}
