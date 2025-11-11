<script>
    // Function to apply theme from localStorage
    function applyTheme() {
        const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        if (!themeToggleDarkIcon || !themeToggleLightIcon) return;

        // Apply dark mode based on localStorage or system preference
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            themeToggleLightIcon.classList.remove('hidden');
            themeToggleDarkIcon.classList.add('hidden');
        } else {
            document.documentElement.classList.remove('dark');
            themeToggleDarkIcon.classList.remove('hidden');
            themeToggleLightIcon.classList.add('hidden');
        }
    }

    // Function to setup theme toggle button
    function setupThemeToggle() {
        const themeToggleBtn = document.getElementById('theme-toggle');
        if (!themeToggleBtn) return;

        // Remove old event listeners by cloning
        const newThemeToggleBtn = themeToggleBtn.cloneNode(true);
        themeToggleBtn.parentNode.replaceChild(newThemeToggleBtn, themeToggleBtn);

        newThemeToggleBtn.addEventListener('click', function() {
            const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
            const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }
        });
    }

    // Apply theme immediately (before page renders)
    applyTheme();

    // Reinitialize after Livewire navigation
    document.addEventListener('livewire:navigated', () => {
        applyTheme();
        setupThemeToggle();
        
        // Reinitialize Flowbite dropdowns
        if (typeof initFlowbite !== 'undefined') {
            initFlowbite();
        }
    });

    // Initialize on first load
    document.addEventListener('DOMContentLoaded', () => {
        applyTheme();
        setupThemeToggle();
        
        if (typeof initFlowbite !== 'undefined') {
            initFlowbite();
        }
    });
</script>
