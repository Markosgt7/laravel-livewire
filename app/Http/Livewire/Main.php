<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Main extends Component
{
    public $welcome = "Bienvenidos, estas son tus tareas";
    public function render()
    {
        return view('livewire.main');
    }
}
