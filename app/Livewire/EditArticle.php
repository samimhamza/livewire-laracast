<?php

namespace App\Livewire;

use App\Livewire\Forms\ArticleForm;
use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class EditArticle extends AdminComponent
{

    use WithFileUploads;

    public ArticleForm $form;

    public function mount(Article $article)
    {
        $this->form->setArticle($article);
    }

    public function save()
    {
        $this->form->update();

        session()->flash('status', 'Articles successfully updated');

        $this->redirect(ArticleList::class, navigate: true);
    }
    public function render()
    {
        return view('livewire.edit-article');
    }
}
