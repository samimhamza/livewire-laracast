<?php

namespace App\Livewire;

use App\Livewire\Forms\ArticleForm;
use App\Models\Article;
use App\NotificationEnum;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Title('Creat Article')]
class CreateArticle extends AdminComponent
{
    public ArticleForm $form;

    public function save()
    {
        $this->form->store();

        $this->redirectRoute('dashboard.articles.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
