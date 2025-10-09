<header class="absolute top-0 left-0 w-full z-20 border-b border-gray-400">
    <nav class="flex items-center justify-between px-6 lg:px-20 py-4">
        <div class="text-3xl font-bold text-orange-400">Animocare</div>

        <?php
        // Example: $pageTitle = 'Home'; (set this at the top of each page)
        $activeClass = "text-orange-400 border-b-2 border-orange-400 pb-1";
        $defaultClass = "text-base hover:text-orange-400";
        ?>

        <ul class="hidden md:flex space-x-8 text-white font-medium">
            <li>
                <a href="/" class="<?= $page == 'home' ? $activeClass : $defaultClass ?>">Home</a>
            </li>
            <li>
                <a href="/services" class="<?= $page == 'services' ? $activeClass : $defaultClass ?>">Services</a>
            </li>
            <li>
                <a href="/about" class="<?= $pageTitle == 'about' ? $activeClass : $defaultClass ?>">About</a>
            </li>
            <li>
                <a href="/blog" class="<?= $pageTitle == 'blog' ? $activeClass : $defaultClass ?>">Blog</a>
            </li>
        </ul>

        <div class="flex items-center space-x-4">
            <a href="/contact" class="bg-gradient-to-r from-orange-500 to-yellow-400 text-white px-4 py-2 rounded-full shadow-lg font-semibold hover:opacity-90 text-base">Contact us</a>
        </div>
    </nav>
</header>