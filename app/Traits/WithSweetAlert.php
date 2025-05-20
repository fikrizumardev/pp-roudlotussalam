<?php 

namespace App\Traits;

use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;
use Livewire\Livewire;

trait WithSweetAlert
{
    public function alert(string $message, string $type, string $position = 'top-end')
    {   
        if ($type == 'success') 
        {
            LivewireAlert::title($message)
            ->success()
            ->toast()
            ->position($position)
            ->timer(3000)
            ->show();
        }
        else 
        {
            LivewireAlert::title($message)
            ->error()
            ->toast()
            ->position($position)
            ->timer(3000)
            ->show();
        }
    }

    public function alertWithRedirect(string $message, string $type, string $route, string $position = 'top-end')
    {   
        session()->flash('alert', [
            'type' => $type,
            'title' => $message,
            'position' => $position,
            'toast' => true,
            'timer' => 3000,
        ]);

        return redirect($route);
    }
}
