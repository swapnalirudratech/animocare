<?php

$page = 'Product Details';
include 'includes/header.php';
include 'includes/product_array.php';
include 'includes/nav.php';

$product_id = isset($_GET['id']) ? $_GET['id'] : '';

if ($product_id && isset($products[$product_id])) {
    $item = $products[$product_id];
} else {
    // FALLBACK: If ID is wrong or missing, show the first product or a 404 message
    // For now, let's default to the first item in the array so the page never looks broken
    // $item = reset($products);
    // OR redirect: header("Location: index.php"); exit();
}
?>

<body class="bg-gray-50">

    <div class="bg-white border-b border-gray-200 pt-24">
        <div class="container mx-auto px-6 lg:px-16 py-4">
            <nav class="flex text-sm text-gray-500">
                <a href="/" class="hover:text-orange-500 transition">Home</a>
                <span class="mx-2">/</span>
                <span class="text-gray-500">Products</span>
                <span class="mx-2">/</span>
                <span class="text-orange-500 font-semibold"><?= $item['category'] ?></span>
                <span class="mx-2">/</span>
                <span class="text-orange-500 font-semibold"><?= $item['name'] ?></span>
            </nav>
        </div>
    </div>

    <section class="py-12 lg:py-16">
        <div class="w-[80%] max-md:w-[90%] mx-auto">
            <div class="flex flex-col lg:flex-row gap-12 lg:gap-14 ">

                <div class="w-full lg:w-1/2">
                    <div class="relative group overflow-hidden rounded-3xl shadow-lg border border-gray-100 bg-white h-[300px] lg:h-[400px]">
                        <img src="<?= $item['image'] ?>"
                            alt="<?= $item['name'] ?>"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute top-4 left-4 bg-orange-500 text-white text-xs font-bold uppercase px-3 py-1 rounded shadow-md">
                            Export Quality
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2 flex flex-col justify-start">

                    <span class="text-orange-500 font-bold uppercase tracking-wider text-sm mb-3">
                        <?= $item['category'] ?>
                    </span>

                    <h1 class="text-3xl lg:text-4xl font-extrabold text-gray-900 leading-tight mb-6">
                        <?= $item['name'] ?>
                    </h1>

                    <p class="text-gray-600 text-lg leading-relaxed mb-8 border-l-4 border-orange-200 pl-4">
                        <?= $item['short_desc'] ?>
                    </p>

                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="flex items-center space-x-3 text-gray-700">
                            <i class="fas fa-ship text-orange-500"></i>
                            <span class="font-medium">Global Shipping</span>
                        </div>
                        <div class="flex items-center space-x-3 text-gray-700">
                            <i class="fas fa-check-circle text-green-500"></i>
                            <span class="font-medium">Quality Tested</span>
                        </div>
                        <div class="flex items-center space-x-3 text-gray-700">
                            <i class="fas fa-box-open text-blue-500"></i>
                            <span class="font-medium">Bulk Packaging</span>
                        </div>
                        <div class="flex items-center space-x-3 text-gray-700">
                            <i class="fas fa-handshake text-gray-500"></i>
                            <span class="font-medium">Best Market Rates</span>
                        </div>
                    </div>



                    <div class="flex flex-col sm:flex-row gap-4 mt-auto">
                        <a href="/contact?product=<?= urlencode($item['name']) ?>"
                            class="flex-1 bg-gradient-to-r from-orange-500 to-orange-500 text-white text-center font-bold py-3 rounded-xl shadow-lg hover:shadow-orange-500/40 hover:-translate-y-1 transition-all">
                            Request Quote
                        </a>
                        <a href="https://wa.me/1234567890"
                            class="flex-1 bg-green-500 text-white text-center font-bold py-3 rounded-xl shadow-lg hover:bg-green-600 hover:-translate-y-1 transition-all">
                            <i class="fab fa-whatsapp mr-2"></i> WhatsApp Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white border-t border-gray-100 py-16">
        <div class="w-[80%] max-md:w-[90%] mx-auto">
            <div class="flex flex-col lg:flex-row gap-12">

                <div class="lg:w-[55%] w-full">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-align-left text-orange-500 mr-3"></i> Product Details
                    </h2>
                    <div class="prose max-w-none text-gray-600 leading-relaxed text-justify">
                        <p><?= $item['long_desc'] ?></p>
                        <p class="mt-4">
                            We ensure that our <?= strtolower($item['name']) ?> meets international standards. Our logistics team handles end-to-end supply chain management, ensuring timely delivery to your port of destination.
                        </p>
                    </div>
                </div>

                <div class="lg:w-[45%] w-full">
                    <div class="bg-gray-50 rounded-xl p-6 border border-gray-200">
                        <h2 class="text-xl font-bold text-gray-900 mb-4">Specifications</h2>
                        <div class="overflow-hidden rounded-lg border border-gray-200">
                            <table class="w-full text-sm text-left text-gray-600">
                                <tbody>
                                    <?php
                                    // Loop through the specs array
                                    foreach ($item['specs'] as $key => $value):
                                    ?>
                                        <tr class="border-b border-gray-200 last:border-b-0 odd:bg-white even:bg-gray-50">
                                            <td class="px-4 py-3 font-semibold text-gray-800 w-1/2"><?= $key ?></td>
                                            <td class="px-4 py-3 text-gray-600"><?= $value ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6 lg:px-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Other Products</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                $count = 0;
                foreach ($products as $key => $related):

                    if ($key == $product_id || $count >= 4) continue;
                    $count++;
                ?>
                    <a href="product.php?id=<?= $key ?>" class="group bg-white rounded-xl shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100 flex flex-col">
                        <div class="h-48 overflow-hidden">
                            <img src="<?= $related['image'] ?>"
                                alt="<?= $related['name'] ?>"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="p-4 flex-1 flex flex-col">
                            <span class="text-xs font-bold text-orange-500 uppercase"><?= $related['category'] ?></span>
                            <h3 class="text-lg font-bold text-gray-800 mt-1 group-hover:text-orange-500 transition truncate"><?= $related['name'] ?></h3>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section> -->

</body>
<?php include 'includes/footer.php'; ?>