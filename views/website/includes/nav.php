<header class="absolute top-0 left-0 w-full z-20 border-b border-gray-400">
    <nav class="flex items-center justify-between px-6 lg:px-20 py-2.5">
       <a href="/" class="flex items-center space-x-2">
         <img src="/public/assets/images/logo2.jpg" alt="Logo" class="w-auto h-20 rounded">
         <!-- <div class="text-3xl font-bold text-brand">Animocare <span class="text-base">Private Limited</span></div> -->
       </a>

        <?php
        $activeClass = "text-brand border-b-2 border-brand pb-1";
        $defaultClass = "text-base hover:text-brand";
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