<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Title('Creat Article')]
class CreateArticle extends AdminComponent
{
    #[Validate('required')]
    public $title = '';

    #[Validate('required')]
    public $content = '';

    public function save()
    {
        $this->validate();

        Article::creat($this->all);
        $this->redirect('/dashboard/articles');
    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
