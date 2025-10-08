<?php
$page = "blog";
include 'includes/header.php';
include 'includes/nav.php';
?>

<body class="overflow-x-hidden">

    <!-- Main Content -->
    <section class="w-[85vw] max-md:w-[90vw] items-center justify-center mx-auto px-4 md:px-8 py-12">
        <div class="flex flex-col gap-8 ">
            <!-- Main Blog Posts (2/3 width) -->
            <div class="lg:col-span-2">
                <div class="relative w-[80vw] mx-auto">
                    <div class="flex justify-center text-center items-center mb-10">
                        <span class="h-px w-12 bg-red-300 mr-4"></span>
                        <h3 class="uppercase text-indigo-900 font-bold subtitle text-3xl">Latest Blogs
                        </h3>
                        <span class="h-px w-12 bg-red-300 ml-4"></span>
                    </div>
                </div>

                <!-- Featured Posts in a 2x2 Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                    <?php foreach ($blogs as $key => $blog) { 
                        $url = str_replace(' ', '-', $blog['blog_title']);
                        $url = str_replace('“', '', $url);
                        $url = str_replace('”', '', $url);
                        $url = str_replace('’', '', $url);
                        $url = str_replace('&', 'and', $url);
                        $url = strtolower($url);

                        ?>
                        <div
                            class="bg-white shadow-md rounded-lg overflow-hidden p-2 border border-gray-200 hover:shadow-lg transition">
                            <img src="<?= $blog['blog_img'] ?>" alt="Blog Image" class="w-full h-48 object-cover rounded">

                            <div class="p-5 flex flex-col justify-between h-auto">
                                <div>
                                    <p class="text-xs text-gray-600 mb-4">
                                        <i class="far fa-calendar-alt mr-1 text-red-500"></i><?= $blog['blog_date'] ?>
                                    </p>
                                    <h3 class="text-xl font-semibold text-gray-800 mb-2 capitalize">
                                        <?= $blog['blog_title'] ?>
                                    </h3>
                                    <p class="text-sm text-gray-600 mb-4">
                                        <?= mb_strimwidth(strip_tags($blog['blog_description']), 0, 150, '...') ?>
                                    </p>
                                </div>

                                <div class="flex justify-between items-center w-full">
                                    <!-- Read More Link -->
                                    <a href="/<?= $url ?>" class="text-blue-600 text-base font-medium">
                                        Read More
                                    </a>

                                    <!-- Share Button -->
                                    <button
                                        onclick="shareBlog('<?= $blog['blog_title'] ?>', window.location.origin + '/blog-details')"
                                        class="flex items-center text-blue-600 h-10 w-10 rounded-full bg-blue-100 items-center justify-center hover:text-blue-700 text-base font-medium">
                                        <i class="fas fa-share-alt mr-1"></i>
                                    </button>
                                </div>

                            </div>
                        </div>
                    <?php } ?>
                </div>
                <script>
                    function shareBlog(title, url) {
                        if (navigator.share) {
                            navigator.share({
                                title: title,
                                text: `Check out this blog`,
                                url: url
                            })
                                .then(() => console.log('Shared successfully'))
                                .catch((error) => console.error('Error sharing:', error));
                        } else {
                            // fallback if share API is not supported
                            alert("Sharing not supported in this browser. Please copy the link:\n" + url);
                        }
                    }
                </script>

            </div>
        </div>
    </section>


</body>

<?php include 'includes/footer.php'; ?>