# Project Structure - Larabite Admin

Dokumentasi struktur file dan folder untuk template admin Larabite.

## Layout Structure

Layout telah direfactor menjadi komponen-komponen modular untuk kemudahan maintenance dan reusability.

### Main Layout
```
resources/views/layouts/admin-new.blade.php
```

Layout utama yang sangat sederhana dan clean:
```blade
<!DOCTYPE html>
<html>
<head>
    <!-- Meta tags, title, fonts, styles -->
</head>
<body>
    @include('partials.navbar')
    @include('partials.sidebar')
    
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-14">
            @yield('content')
        </div>
    </div>
    
    @include('partials.scripts')
    @stack('scripts')
    @livewireScripts
</body>
</html>
```

### Partials Components

#### 1. Navbar (`resources/views/partials/navbar.blade.php`)
**Berisi:**
- Mobile sidebar toggle button
- Logo dan app name
- User profile dropdown
  - Dashboard link
  - Settings link
  - Sign out link

**Fitur:**
- Responsive design
- Dark mode support
- Flowbite dropdown integration
- Livewire SPA navigation

#### 2. Sidebar (`resources/views/partials/sidebar.blade.php`)
**Berisi:**
- Navigation menu items:
  - Dashboard
  - Operasional
  - Pajak Kendaraan (dropdown)
  - Master Kendaraan (dropdown)
  - Pembayaran
  - Penulisan Pajak
  - Lokasi
  - Laporan
  - Konfigurasi
- Dark mode toggle button

**Fitur:**
- Collapsible dropdown menus
- Active state indicators
- Icon untuk setiap menu
- Fixed position dengan scroll
- Dark mode toggle di bottom

#### 3. Scripts (`resources/views/partials/scripts.blade.php`)
**Berisi:**
- Dark mode functions:
  - `applyTheme()` - Apply theme dari localStorage
  - `setupThemeToggle()` - Setup toggle button event
- Livewire navigation handlers
- Flowbite re-initialization

**Event Listeners:**
- `livewire:navigated` - Re-apply theme & reinit Flowbite
- `DOMContentLoaded` - Initial setup

## Directory Structure

```
resources/views/
├── layouts/
│   ├── admin-new.blade.php          # Main layout (clean & modular)
│   ├── admin-new.blade.php.backup   # Backup file lama
│   └── admin-clean.blade.php        # Template clean layout
│
├── partials/
│   ├── navbar.blade.php             # Top navigation bar
│   ├── sidebar.blade.php            # Left sidebar menu
│   └── scripts.blade.php            # JavaScript functions
│
├── livewire/
│   └── admin/
│       ├── dashboard.blade.php      # Dashboard component view
│       └── settings.blade.php       # Settings component view
│
└── admin/
    └── dashboard.blade.php          # Old dashboard view (deprecated)
```

## Livewire Components

```
app/Livewire/Admin/
├── Dashboard.php                    # Dashboard component
└── Settings.php                     # Settings component
```

## Benefits of This Structure

### 1. **Modularity**
- Setiap komponen terpisah dalam file sendiri
- Mudah untuk maintain dan update
- Reusable components

### 2. **Clean Code**
- Main layout hanya ~40 lines
- Easy to read and understand
- Clear separation of concerns

### 3. **Easy Maintenance**
- Update navbar? Edit `partials/navbar.blade.php`
- Update sidebar? Edit `partials/sidebar.blade.php`
- Update scripts? Edit `partials/scripts.blade.php`

### 4. **Scalability**
- Mudah menambah partial baru
- Mudah membuat layout variant
- Mudah untuk testing

## How to Use

### Creating New Pages

1. **Create Livewire Component:**
```bash
php artisan make:livewire Admin/PageName
```

2. **Update Component Class:**
```php
public function render()
{
    return view('livewire.admin.page-name')
        ->layout('layouts.admin-new')
        ->title('Page Name - Admin');
}
```

3. **Add Route:**
```php
Route::get('/admin/page-name', PageName::class)->name('admin.page-name');
```

4. **Add to Sidebar:**
Edit `resources/views/partials/sidebar.blade.php`:
```blade
<li>
    <a href="{{ route('admin.page-name') }}" wire:navigate class="...">
        <!-- Icon -->
        <span>Page Name</span>
    </a>
</li>
```

### Customizing Navbar

Edit `resources/views/partials/navbar.blade.php`:
- Change logo
- Add/remove menu items
- Modify user dropdown

### Customizing Sidebar

Edit `resources/views/partials/sidebar.blade.php`:
- Add/remove menu items
- Change icons
- Modify dropdown menus
- Customize dark mode toggle

### Adding Custom Scripts

Option 1 - Edit `partials/scripts.blade.php`:
```javascript
// Add your global scripts here
```

Option 2 - Use `@push` in component views:
```blade
@push('scripts')
<script>
    // Component-specific scripts
</script>
@endpush
```

## File Sizes

**Before Refactoring:**
- `admin-new.blade.php`: ~260 lines

**After Refactoring:**
- `admin-new.blade.php`: ~40 lines ✅
- `partials/navbar.blade.php`: ~45 lines
- `partials/sidebar.blade.php`: ~135 lines
- `partials/scripts.blade.php`: ~80 lines

**Total:** Same functionality, better organization! 🎉

## Best Practices

1. **Keep partials focused** - Satu partial = satu concern
2. **Use meaningful names** - Nama file harus jelas fungsinya
3. **Comment your code** - Tambahkan comment untuk logic kompleks
4. **Follow conventions** - Ikuti Laravel & Livewire best practices
5. **Test after changes** - Selalu test setelah edit partials

## Troubleshooting

### Partial not found
**Error:** `View [partials.navbar] not found`

**Solution:** Pastikan file ada di `resources/views/partials/navbar.blade.php`

### Scripts not working
**Error:** Dark mode atau dropdown tidak berfungsi

**Solution:** 
1. Check `partials/scripts.blade.php` included di layout
2. Check Flowbite imported di `app.js`
3. Clear cache: `php artisan view:clear`

### Styling issues
**Error:** Styles tidak apply

**Solution:**
1. Rebuild assets: `npm run build`
2. Clear browser cache
3. Check Tailwind classes di partials

## Future Improvements

- [ ] Add breadcrumb partial
- [ ] Add footer partial
- [ ] Add notification/toast partial
- [ ] Add search bar partial
- [ ] Create multiple layout variants
- [ ] Add component documentation
