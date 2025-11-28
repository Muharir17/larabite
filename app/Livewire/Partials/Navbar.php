<?php

namespace App\Livewire\Partials;

use App\Livewire\Traits\WithLogout;
use Livewire\Component;

class Navbar extends Component
{
    use WithLogout;

    protected $listeners = ['confirmLogout' => 'logout'];

    public function confirmLogout()
    {
        $this->dispatch('showConfirmation', [
            'title' => '',
            'message' => __('auth.logout_confirm'),
            'confirmText' => __('auth.logout_yes'),
            'cancelText' => __('auth.logout_cancel'),
            'confirmAction' => 'confirmLogout',
            'icon' => 'warning'
        ]);
    }

    public function render()
    {
        return view('livewire.partials.navbar');
    }
}
