<?php

namespace App\Livewire\Partials;

use App\Livewire\Traits\WithLogout;
use Livewire\Component;

class Navbar extends Component
{
    use WithLogout;

    public function render()
    {
        return view('livewire.partials.navbar');
    }
}
