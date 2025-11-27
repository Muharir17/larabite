<?php

namespace App\Livewire\Traits;

use Illuminate\Support\Facades\Auth;

trait WithLogout
{
    public function logout()
    {
        Auth::logout();
        
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        
        return redirect()->route('login');
    }
}
