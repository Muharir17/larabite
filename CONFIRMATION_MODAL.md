# Confirmation Modal Component

Komponen modal konfirmasi yang reusable untuk digunakan di seluruh aplikasi.

## Lokasi File

- **Component**: `app/Livewire/Components/ConfirmationModal.php`
- **View**: `resources/views/livewire/components/confirmation-modal.blade.php`

## Instalasi

Modal sudah otomatis tersedia di layout `master.blade.php`, jadi tidak perlu include manual.

## Cara Penggunaan

### 1. Dari Livewire Component

```php
<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class YourComponent extends Component
{
    // Tambahkan listener untuk menerima konfirmasi
    protected $listeners = ['confirmDelete' => 'deleteItem'];

    public function confirmDelete()
    {
        // Trigger modal dengan dispatch event
        $this->dispatch('showConfirmation', [
            'title' => 'Hapus Data',  // Optional
            'message' => 'Apakah Anda yakin ingin menghapus data ini?',
            'confirmText' => 'Ya, Hapus',  // Optional, default: dari translation
            'cancelText' => 'Batal',  // Optional, default: dari translation
            'confirmAction' => 'confirmDelete',  // Event yang akan dipanggil saat confirm
            'icon' => 'danger'  // Optional: warning, danger, info, success
        ]);
    }

    public function deleteItem()
    {
        // Logic untuk menghapus item
        // Method ini akan dipanggil ketika user klik tombol confirm
    }

    public function render()
    {
        return view('livewire.admin.your-component');
    }
}
```

### 2. Dari Blade Template

```blade
<button wire:click="confirmDelete" type="button" class="...">
    Hapus
</button>
```

## Parameter Modal

| Parameter | Type | Required | Default | Deskripsi |
|-----------|------|----------|---------|-----------|
| `title` | string | No | '' | Judul modal |
| `message` | string | Yes | - | Pesan konfirmasi |
| `confirmText` | string | No | `__('auth.logout_yes')` | Teks tombol konfirmasi |
| `cancelText` | string | No | `__('auth.logout_cancel')` | Teks tombol batal |
| `confirmAction` | string | Yes | - | Nama event yang akan di-dispatch saat confirm |
| `icon` | string | No | 'warning' | Icon modal: `warning`, `danger`, `info`, `success` |

## Contoh Penggunaan

### Contoh 1: Konfirmasi Hapus Data

```php
public function showDeleteConfirmation($itemId)
{
    $this->selectedItemId = $itemId;
    
    $this->dispatch('showConfirmation', [
        'title' => 'Hapus Data',
        'message' => 'Data yang dihapus tidak dapat dikembalikan. Lanjutkan?',
        'confirmText' => 'Ya, Hapus',
        'cancelText' => 'Batal',
        'confirmAction' => 'deleteConfirmed',
        'icon' => 'danger'
    ]);
}

protected $listeners = ['deleteConfirmed' => 'deleteItem'];

public function deleteItem()
{
    // Delete logic here
    Item::find($this->selectedItemId)->delete();
    session()->flash('success', 'Data berhasil dihapus!');
}
```

### Contoh 2: Konfirmasi Submit Form

```php
public function confirmSubmit()
{
    $this->dispatch('showConfirmation', [
        'message' => 'Apakah data yang Anda masukkan sudah benar?',
        'confirmText' => 'Ya, Simpan',
        'confirmAction' => 'submitConfirmed',
        'icon' => 'info'
    ]);
}

protected $listeners = ['submitConfirmed' => 'save'];

public function save()
{
    $this->validate();
    // Save logic here
}
```

### Contoh 3: Konfirmasi Logout (Sudah Diimplementasi di Navbar)

```php
public function confirmLogout()
{
    $this->dispatch('showConfirmation', [
        'message' => __('auth.logout_confirm'),
        'confirmText' => __('auth.logout_yes'),
        'cancelText' => __('auth.logout_cancel'),
        'confirmAction' => 'confirmLogout',
        'icon' => 'warning'
    ]);
}

protected $listeners = ['confirmLogout' => 'logout'];

public function logout()
{
    Auth::logout();
    // ... logout logic
}
```

## Icon Types

- **warning** (default): Icon peringatan kuning/abu-abu
- **danger**: Icon peringatan merah
- **success**: Icon centang hijau
- **info**: Icon informasi biru

## Styling

Modal menggunakan Tailwind CSS dengan support untuk dark mode. Anda dapat memodifikasi styling di file view:
`resources/views/livewire/components/confirmation-modal.blade.php`

## Tips

1. **Listener Name**: Pastikan nama event di `confirmAction` sama dengan nama di `$listeners`
2. **Multiple Confirmations**: Anda bisa menggunakan modal ini untuk berbagai konfirmasi dalam satu component
3. **Translation**: Gunakan `__()` helper untuk mendukung multi-bahasa
4. **State Management**: Simpan data yang diperlukan (seperti ID) di property component sebelum menampilkan modal

## Troubleshooting

**Modal tidak muncul?**
- Pastikan `@livewire('components.confirmation-modal')` sudah ada di layout
- Check console browser untuk error JavaScript

**Confirm action tidak jalan?**
- Pastikan `confirmAction` sesuai dengan key di `$listeners`
- Pastikan method yang dipanggil ada di component

**Styling tidak sesuai?**
- Check apakah Tailwind CSS sudah di-compile
- Pastikan dark mode configuration sudah benar
