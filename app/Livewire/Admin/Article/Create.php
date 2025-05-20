<?php

namespace App\Livewire\Admin\Article;

use App\Livewire\BaseComponent;
use App\Models\Article;
use App\Traits\WithSweetAlert;
use Carbon\Carbon;
use Faker\Provider\Base;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class Create extends BaseComponent
{
    use WithFileUploads, WithSweetAlert;

    public $title, $content, $cover_path, $status, $user;

    public function mount()
    {
        $this->user = Auth::user();
    }

    public function render()
    {
        return view('livewire.admin.article.create')->layout('layouts.admin.app');
    }

    public function store()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'cover_path' => 'required|image|max:4096',
            'status' => 'required',
        ]);

        DB::beginTransaction();

        try 
        {
            $article = new Article();
            $article->title = $this->title;
            $article->slug = Str::slug($this->title);
            $article->content = $this->content;
            $article->cover_path = $this->cover_path;
            $article->author_id = $this->user->id;
            $article->status = $this->status;
            $article->published_at = Carbon::now();
            $article->save();

            DB::commit();

            $this->alertWithRedirect('Article created successfully', 'success', route('article.index'), 'top-end');

        } 
        catch (\Throwable $th) 
        {
            dd($th);
        }
    }
}
