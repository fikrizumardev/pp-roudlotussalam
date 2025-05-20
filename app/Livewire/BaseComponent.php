<?php 
namespace App\Livewire;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\Facades\LivewireAlert;

class BaseComponent extends Component
{
    public function mount()
    {
        if (session()->has('alert')) 
        {
            if (session('alert.type') == 'success') 
            {
                LivewireAlert::title(session('alert.title'))
                ->success()
                ->toast()
                ->position(session('alert.position'))
                ->timer(session('alert.timer'))
                ->show();
            }
            else 
            {
                LivewireAlert::title(session('alert.title'))
                ->error()
                ->toast()
                ->position(session('alert.position'))
                ->timer(session('alert.timer'))
                ->show();
            }
        }
    }
}
