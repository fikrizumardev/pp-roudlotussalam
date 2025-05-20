<?php

namespace App\Livewire\Admin\Article;

use App\Livewire\BaseComponent;
use Livewire\Component;

class Index extends BaseComponent
{
    public function render()
    {
        return view('livewire.admin.article.index')->layout('layouts.admin.app');
    }
}
