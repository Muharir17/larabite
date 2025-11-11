<!-- Navbar -->
<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                    </svg>
                </button>
                <a href="{{ url('/') }}" wire:navigate class="flex ms-2 md:me-24">
                    <svg class="h-8 me-3" viewBox="0 0 33 33" fill="none">
                        <path d="M24.1428 12.8571H8.85714C7.83147 12.8571 7 13.6886 7 14.7143V24.1428C7 25.1685 7.83147 26 8.85714 26H24.1428C25.1685 26 26 25.1685 26 24.1428V14.7143C26 13.6886 25.1685 12.8571 24.1428 12.8571Z" fill="#F53003"/>
                        <path d="M24.1428 7H8.85714C7.83147 7 7 7.83147 7 8.85714V11.7857C7 12.8114 7.83147 13.6429 8.85714 13.6429H24.1428C25.1685 13.6429 26 12.8114 26 11.7857V8.85714C26 7.83147 25.1685 7 24.1428 7Z" fill="#F8B803"/>
                    </svg>
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">{{ config('app.name', 'Laravel') }}</span>
                </a>
            </div>
            <div class="flex items-center">
                <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="https://ui-avatars.com/api/?name=Admin+User&background=F53003&color=fff" alt="user">
                </button>
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                    <div class="px-4 py-3">
                        <p class="text-sm text-gray-900 dark:text-white">Admin User</p>
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300">admin@example.com</p>
                    </div>
                    <ul class="py-1">
                        <li><a href="{{ route('admin.dashboard') }}" wire:navigate class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600">Dashboard</a></li>
                        <li><a href="{{ route('admin.settings') }}" wire:navigate class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600">Settings</a></li>
                        <li><a href="#" wire:navigate class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
