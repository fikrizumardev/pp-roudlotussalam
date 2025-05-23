<?php

namespace App\Livewire\Admin\Article;

use App\Livewire\BaseComponent;
use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends BaseComponent
{
    use WithPagination;

    public $search, $status;
    public $paginate = 10;

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function updatedStatus()
    {
        $this->resetPage();
    }

    public function render()
    {
        $articles = Article::with('author')
            ->when($this->search, function ($query) {
                $query->where('title', 'like', '%' . $this->search . '%');
            })
            ->when($this->status, function ($query) {
                $query->where('status', $this->status);
            })
            ->latest()
            ->paginate($this->paginate);
        return view('livewire.admin.article.index', [
            'articles' => $articles,
        ])->layout('layouts.admin.app');
    }
}
