<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Settings;

Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});

Route::get('/admin/dashboard', Dashboard::class)->name('admin.dashboard');
Route::get('/admin/settings', Settings::class)->name('admin.settings');
