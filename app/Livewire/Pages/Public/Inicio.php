<?php

namespace App\Livewire\Pages\Public;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.page')] 
class Inicio extends Component
{
    public function render()
    {
        return view('livewire.pages.public.inicio');
    }
}
