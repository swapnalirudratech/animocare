<header class="absolute top-0 left-0 w-full z-20 border-b border-gray-400 bg-gray-800">
    <nav class="flex items-center justify-between px-6 lg:px-20 py-2.5">
        <!-- Logo -->
        <a href="/" class="flex items-center space-x-2">
            <img src="/public/assets/images/logo2.jpg" alt="Logo" class="w-auto h-20 max-md:h-14 rounded">
        </a>

        <?php
        $activeClass = "text-brand border-b-2 border-brand pb-1";
        $defaultClass = "text-base hover:text-brand";
        ?>

        <!-- Desktop Menu -->
        <ul class="hidden md:flex space-x-8 text-white font-medium">
            <li><a href="/" class="<?= $page == 'home' ? $activeClass : $defaultClass ?>">Home</a></li>
            <li><a href="/services" class="<?= $page == 'services' ? $activeClass : $defaultClass ?>">Services</a></li>
            <li><a href="/about" class="<?= $pageTitle == 'about' ? $activeClass : $defaultClass ?>">About</a></li>
            <li><a href="/blog" class="<?= $pageTitle == 'blog' ? $activeClass : $defaultClass ?>">Blog</a></li>
        </ul>

        <!-- Contact Button (Desktop) -->
        <div class="hidden md:flex items-center space-x-4">
            <a href="/contact" class="bg-gradient-to-r from-orange-500 to-yellow-400 text-white px-4 py-2 rounded-full shadow-lg font-semibold hover:opacity-90 text-base">Contact us</a>
        </div>

        <!-- Mobile Hamburger -->
        <div class="md:hidden flex items-center">
            <button id="sidebar-toggle" class="text-white focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </nav>

    <!-- Mobile Sidebar -->
    <div id="mobile-sidebar" class="fixed top-0 left-0 h-full w-64 bg-gray-800 transform -translate-x-full transition-transform duration-300 ease-in-out z-30">
        <div class="flex justify-between items-center px-6 py-4 border-b border-gray-700">
            <img src="/public/assets/images/logo2.jpg" alt="Logo" class="w-auto max-md:h-12 rounded">
            <button id="sidebar-close" class="text-white focus:outline-none text-2xl">&times;</button>
        </div>
        <ul class="flex flex-col space-y-4 mt-6 px-6 text-white font-medium">
            <li><a href="/" class="<?= $page == 'home' ? $activeClass : $defaultClass ?>">Home</a></li>
            <li><a href="/services" class="<?= $page == 'services' ? $activeClass : $defaultClass ?>">Services</a></li>
            <li><a href="/about" class="<?= $pageTitle == 'about' ? $activeClass : $defaultClass ?>">About</a></li>
            <li><a href="/blog" class="<?= $pageTitle == 'blog' ? $activeClass : $defaultClass ?>">Blog</a></li>
            <li><a href="/contact" class="bg-gradient-to-r from-orange-500 to-yellow-400 text-white px-4 py-2 rounded-full shadow-lg font-semibold hover:opacity-90 text-base">Contact us</a></li>
        </ul>
    </div>

    <!-- Sidebar Overlay -->
    <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-20"></div>
</header>

<script>
    const sidebar = document.getElementById('mobile-sidebar');
    const overlay = document.getElementById('sidebar-overlay');
    const openBtn = document.getElementById('sidebar-toggle');
    const closeBtn = document.getElementById('sidebar-close');

    const openSidebar = () => {
        sidebar.classList.remove('-translate-x-full');
        overlay.classList.remove('hidden');
    };

    const closeSidebar = () => {
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    };

    openBtn.addEventListener('click', openSidebar);
    closeBtn.addEventListener('click', closeSidebar);
    overlay.addEventListener('click', closeSidebar);
</script>