# 🚀 Larabite - Laravel Admin Template

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/Livewire-3.x-4E56A6?style=for-the-badge&logo=livewire&logoColor=white" alt="Livewire">
  <img src="https://img.shields.io/badge/Tailwind_CSS-4.x-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS">
  <img src="https://img.shields.io/badge/Flowbite-3.x-1C64F2?style=for-the-badge&logo=flowbite&logoColor=white" alt="Flowbite">
</p>

<p align="center">
  Modern, fast, and beautiful admin template built with Laravel, Livewire, Tailwind CSS, and Flowbite.
</p>

---

## ✨ Features

### 🎨 Modern UI/UX
- **Tailwind CSS v4** - Utility-first CSS framework
- **Flowbite Components** - Beautiful pre-built components
- **Dark Mode** - Persistent theme with localStorage
- **Responsive Design** - Mobile-first approach
- **Clean Layout** - Modular component structure

### ⚡ Performance
- **Livewire SPA** - Single Page Application experience
- **Fast Navigation** - No full page reloads
- **Optimized Bundle** - ~52 KB gzipped total
- **Lightning Fast** - Build time < 1 second
- **High Lighthouse Score** - 95-100/100

### 🛠️ Developer Experience
- **Modular Architecture** - Clean separation of concerns
- **Reusable Components** - Partials for navbar, sidebar, scripts
- **Easy Customization** - Well-documented structure
- **Type Safety** - PHP 8.2+ features
- **Hot Module Replacement** - Instant feedback during development

### 📦 Built-in Components
- ✅ Responsive Navbar with user dropdown
- ✅ Collapsible Sidebar with navigation
- ✅ Dashboard with charts (ApexCharts)
- ✅ Settings page
- ✅ Dark mode toggle
- ✅ Mobile-friendly drawer
- ✅ Dropdown menus

---

## 🚀 Quick Start

### Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js 18+ and npm
- MySQL/PostgreSQL/SQLite

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/Muharir17/larabite.git
   cd larabite
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install JavaScript dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure database**
   
   Edit `.env` file:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=larabite
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. **Run migrations**
   ```bash
   php artisan migrate
   ```

7. **Build assets**
   ```bash
   npm run build
   ```

8. **Start development server**
   ```bash
   # Terminal 1 - Laravel
   php artisan serve
   
   # Terminal 2 - Vite (for development)
   npm run dev
   ```

9. **Visit the application**
   
   Open your browser: `http://localhost:8000`

---

## 📁 Project Structure

```
larabite/
├── app/
│   └── Livewire/
│       └── Admin/
│           ├── Dashboard.php      # Dashboard component
│           └── Settings.php       # Settings component
│
├── resources/
│   ├── css/
│   │   └── app.css               # Tailwind CSS config
│   ├── js/
│   │   └── app.js                # JavaScript entry point
│   └── views/
│       ├── layouts/
│       │   └── admin-new.blade.php    # Main layout
│       ├── partials/
│       │   ├── navbar.blade.php       # Top navigation
│       │   ├── sidebar.blade.php      # Left sidebar
│       │   └── scripts.blade.php      # JavaScript functions
│       └── livewire/
│           └── admin/
│               ├── dashboard.blade.php
│               └── settings.blade.php
│
├── routes/
│   └── web.php                   # Application routes
│
├── public/
│   └── build/                    # Compiled assets
│
├── LIVEWIRE_SPA.md              # Livewire SPA documentation
├── STRUCTURE.md                  # Project structure guide
├── REFACTORING.md               # Refactoring documentation
└── README.md                     # This file
```

---

## 🎨 Tech Stack

### Backend
- **Laravel 11.x** - PHP framework
- **Livewire 3.x** - Full-stack framework for Laravel
- **PHP 8.2+** - Modern PHP features

### Frontend
- **Tailwind CSS 4.x** - Utility-first CSS framework
- **Flowbite 3.x** - Component library
- **ApexCharts** - Modern charting library
- **Vite 7.x** - Fast build tool

### Development
- **Concurrently** - Run multiple commands
- **Axios** - HTTP client
- **Laravel Vite Plugin** - Asset bundling

---

## 📚 Documentation

### Quick Links
- [Livewire SPA Guide](LIVEWIRE_SPA.md) - Learn about SPA integration
- [Project Structure](STRUCTURE.md) - Understand the architecture
- [Refactoring Guide](REFACTORING.md) - See what changed

### Key Concepts

#### Livewire Components
```php
// app/Livewire/Admin/Dashboard.php
public function render()
{
    return view('livewire.admin.dashboard')
        ->layout('layouts.admin-new');
}
```

#### Single Root Element
```blade
<!-- resources/views/livewire/admin/dashboard.blade.php -->
<div>
    <!-- All content must be wrapped in single root element -->
    <h1>Dashboard</h1>
    <!-- More content -->
</div>
```

#### Layout with Slot
```blade
<!-- resources/views/layouts/admin-new.blade.php -->
<body>
    @include('partials.navbar')
    @include('partials.sidebar')
    
    <div class="main-content">
        {{ $slot }}  <!-- Livewire component renders here -->
    </div>
</body>
```

---

## 🎯 Usage

### Creating New Pages

1. **Create Livewire Component**
   ```bash
   php artisan make:livewire Admin/PageName
   ```

2. **Update Component Class**
   ```php
   public function render()
   {
       return view('livewire.admin.page-name')
           ->layout('layouts.admin-new');
   }
   ```

3. **Add Route**
   ```php
   Route::get('/admin/page-name', PageName::class)
       ->name('admin.page-name');
   ```

4. **Add to Sidebar**
   Edit `resources/views/partials/sidebar.blade.php`:
   ```blade
   <li>
       <a href="{{ route('admin.page-name') }}" wire:navigate>
           <!-- Icon -->
           <span>Page Name</span>
       </a>
   </li>
   ```

### Customizing Components

#### Navbar
Edit `resources/views/partials/navbar.blade.php`

#### Sidebar
Edit `resources/views/partials/sidebar.blade.php`

#### Scripts
Edit `resources/views/partials/scripts.blade.php`

---

## 🌙 Dark Mode

Dark mode is built-in and persistent:

- Toggle button in sidebar
- Saved to localStorage
- Auto-applies on navigation
- Follows system preference (if not set)

**Implementation:**
```javascript
// Automatically handled in partials/scripts.blade.php
function applyTheme() {
    if (localStorage.getItem('color-theme') === 'dark') {
        document.documentElement.classList.add('dark');
    }
}
```

---

## 🔧 Configuration

### Tailwind CSS

Edit `resources/css/app.css`:
```css
@import "tailwindcss";

@theme {
    --font-family-sans: "Instrument Sans", sans-serif;
}

@variant dark (&:where(.dark, .dark *));
```

### Vite

Edit `vite.config.js`:
```javascript
export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
```

---

## 🚀 Deployment

### Build for Production

```bash
# Install dependencies
composer install --optimize-autoloader --no-dev
npm ci

# Build assets
npm run build

# Optimize Laravel
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Environment Variables

Set these in production `.env`:
```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

# Database
DB_CONNECTION=mysql
DB_HOST=your-db-host
DB_DATABASE=your-db-name
DB_USERNAME=your-db-user
DB_PASSWORD=your-db-password
```

---

## 📊 Performance

### Metrics

```
┌─────────────────────────────────┐
│ Performance Metrics             │
├─────────────────────────────────┤
│ CSS Size:        7.41 KB (gz)   │
│ JS Size:        44.83 KB (gz)   │
│ Build Time:      ~800ms          │
│ FCP:            ~0.8s            │
│ TTI:            ~1.5s            │
│ Lighthouse:      95-100          │
└─────────────────────────────────┘
```

### Optimization Features

- ✅ PurgeCSS (unused styles removed)
- ✅ Tree-shaking (dead code eliminated)
- ✅ Code splitting
- ✅ Asset compression
- ✅ Lazy loading
- ✅ Browser caching

---

## 🧪 Testing

```bash
# Run PHP tests
php artisan test

# Run with coverage
php artisan test --coverage
```

---

## 🤝 Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

---

## 📝 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

---

## 🙏 Acknowledgments

- [Laravel](https://laravel.com) - The PHP Framework
- [Livewire](https://livewire.laravel.com) - Full-stack framework
- [Tailwind CSS](https://tailwindcss.com) - CSS framework
- [Flowbite](https://flowbite.com) - Component library
- [ApexCharts](https://apexcharts.com) - Charting library

---

## 📧 Contact

**Muharir**
- GitHub: [@Muharir17](https://github.com/Muharir17)
- Repository: [larabite](https://github.com/Muharir17/larabite)

---

## 🎉 Features Roadmap

- [ ] Authentication system
- [ ] User management
- [ ] Role & permissions
- [ ] API integration
- [ ] Email notifications
- [ ] File uploads
- [ ] Advanced charts
- [ ] Export functionality
- [ ] Multi-language support
- [ ] PWA support

---

<p align="center">Made with ❤️ using Laravel & Flowbite</p>
<p align="center">⭐ Star this repo if you find it helpful!</p>
