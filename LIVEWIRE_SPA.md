# Livewire SPA Integration

Aplikasi ini telah diintegrasikan dengan Livewire v3 untuk memberikan pengalaman Single Page Application (SPA).

## Fitur yang Telah Diimplementasi

### 1. Livewire SPA Mode
- Semua link di sidebar dan navbar menggunakan `wire:navigate`
- Navigasi antar halaman tanpa full page reload
- Transisi halaman yang smooth dan cepat

### 2. Layout Configuration
- Layout `admin-new.blade.php` telah dikonfigurasi dengan:
  - `@livewireStyles` di `<head>`
  - `@livewireScripts` sebelum `</body>`
  - `@stack('scripts')` untuk custom scripts dari components

### 3. Dashboard Component
- Dashboard telah dikonversi menjadi Livewire component
- Path: `app/Livewire/Admin/Dashboard.php`
- View: `resources/views/livewire/admin/dashboard.blade.php`
- Charts menggunakan event `livewire:navigated` untuk re-render

## Cara Membuat Halaman Baru dengan Livewire

### 1. Buat Livewire Component
```bash
php artisan make:livewire Admin/NamaHalaman
```

### 2. Update Component Class
```php
<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class NamaHalaman extends Component
{
    public function render()
    {
        return view('livewire.admin.nama-halaman')
            ->layout('layouts.admin-new')
            ->title('Nama Halaman - Admin');
    }
}
```

### 3. Update Route
```php
use App\Livewire\Admin\NamaHalaman;

Route::get('/admin/nama-halaman', NamaHalaman::class)->name('admin.nama-halaman');
```

### 4. Tambahkan Link di Sidebar
```html
<a href="{{ route('admin.nama-halaman') }}" wire:navigate class="...">
    <!-- Icon -->
    <span>Nama Halaman</span>
</a>
```

## Tips untuk SPA Mode

### 1. JavaScript Libraries
Jika menggunakan JavaScript libraries (seperti ApexCharts), gunakan event Livewire:
```javascript
document.addEventListener('livewire:navigated', () => {
    // Initialize your library here
});
```

### 2. Custom Scripts
Gunakan `@push('scripts')` di component view:
```blade
@push('scripts')
<script>
    // Your custom script
</script>
@endpush
```

### 3. Scroll to Top
Livewire secara otomatis scroll ke top saat navigasi. Untuk disable:
```html
<a href="..." wire:navigate.noscroll>Link</a>
```

### 4. Prefetching
Untuk loading yang lebih cepat, gunakan prefetch:
```html
<a href="..." wire:navigate.hover>Link</a>
```

## Dropdown Menus

### Sidebar Dropdowns
Dropdown menu di sidebar (Pajak Kendaraan, Master Kendaraan) menggunakan Flowbite collapse:
- Klik button untuk toggle dropdown
- Otomatis re-initialize setelah Livewire navigation
- Menggunakan `data-collapse-toggle` attribute

### User Profile Dropdown
Dropdown profile di navbar:
- Klik avatar untuk membuka menu
- Berisi link ke Dashboard, Settings, dan Sign out
- Menggunakan `data-dropdown-toggle` attribute

### Flowbite Re-initialization
Script otomatis menginisialisasi ulang Flowbite components setelah navigasi Livewire:
```javascript
document.addEventListener('livewire:navigated', () => {
    if (typeof initFlowbite !== 'undefined') {
        initFlowbite();
    }
});
```

## Dark Mode

Dark mode toggle sudah terintegrasi dan akan persist menggunakan localStorage.

### Fitur Dark Mode:
- **Persistent State**: Theme tersimpan di localStorage dan tetap aktif setelah navigasi
- **Auto Apply**: Theme otomatis diterapkan saat page load dan setelah Livewire navigation
- **System Preference**: Jika belum ada setting, mengikuti system preference
- **Toggle Button**: Tombol di sidebar untuk switch antara light/dark mode

### Cara Kerja:
1. `applyTheme()` - Membaca localStorage dan apply theme ke `<html>` element
2. `setupThemeToggle()` - Setup event listener untuk toggle button
3. Kedua function dipanggil pada:
   - Initial page load (`DOMContentLoaded`)
   - After Livewire navigation (`livewire:navigated`)

### Troubleshooting:
Jika dark mode tidak persist setelah navigasi, pastikan:
- Script `applyTheme()` dipanggil pada event `livewire:navigated`
- localStorage tidak di-clear oleh script lain
- Class `dark` ditambahkan ke `<html>` element, bukan `<body>`

## Testing
Untuk test aplikasi:
```bash
# Development
composer dev

# Atau manual
php artisan serve
npm run dev
```

Kemudian buka browser dan navigasi ke `/admin/dashboard`. Perhatikan bahwa navigasi antar halaman tidak melakukan full page reload.
