<?php
$page = 'home';
include 'includes/header.php';
include 'includes/nav.php';
?>

<body class="overflow-x-hidden">
    <section class="relative h-screen flex items-center justify-start bg-cover bg-center" style="background-image: url('/assets/images/6.jpg');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
        <div class="relative z-10 max-w-3xl px-6 lg:px-20">
            <h1 class="text-5xl md:text-6xl font-bold text-white leading-tight">
                <div class="mb-3">About Animocare</div>
                <div class="mb-3 text-orange-400">Connecting Markets, Empowering Trade</div>

            </h1>
            <p class="mt-6 text-base text-gray-200">
                Animocare is a global import-export company dedicated to delivering quality food products, edible oils,
                fertilizers, and more across continents. With a strong supply chain network and industry expertise, we ensure excellence in every shipment.
            </p>
            <!-- <div class="mt-8">
                <a href="#" class="bg-gradient-to-r from-orange-500 to-yellow-400 text-white px-6 py-3 rounded-full text-base font-semibold shadow-lg hover:opacity-90">Learn More →</a>
            </div> -->
        </div>
    </section>
    <section class="w-full mx-auto px-6 py-20">
        <!-- Header -->
        <div class="text-center mb-12">
            <span class="text-orange-500 font-semibold tracking-wide uppercase">
                <span class="text-orange-500">✦</span> Featured Services</span>
            <h2 class="text-4xl font-extrabold mt-3 mb-4">
                Find The Perfect Global Trade <br />
                Solution With Our Service
            </h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                From sourcing and procurement to logistics and distribution, Animocare provides end-to-end import–export
                services. Our experts ensure quality, compliance, and efficiency at every stage of the global supply chain.
            </p>
        </div>

        <!-- Service Grid -->
        <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-8 w-[80%] max-md:w-[90%] mx-auto">
            <!-- Card 1 -->
            <div class="bg-white h-full rounded-2xl shadow-sm p-6 hover:shadow-lg transition flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="text-xl font-bold">Global Sourcing</h3>
                        <i class="fa-solid fa-globe text-orange-500 text-xl"></i>
                    </div>
                    <p class="text-gray-600 mb-4">
                        We identify and source premium-quality agricultural and industrial products from trusted global suppliers.
                    </p>
                </div>
                <img src="/assets/images/6.jpg" alt="Global Sourcing" class="rounded-xl h-56 w-full object-cover mt-auto" />
            </div>

            <!-- Card 2 -->
            <div class="bg-white h-full rounded-2xl shadow-sm p-6 hover:shadow-lg transition flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="text-xl font-bold">International Shipping & Logistics</h3>
                        <i class="fa-solid fa-ship text-orange-500 text-xl"></i>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Reliable, fast, and cost-effective shipping solutions across sea, air, and land—ensuring timely deliveries worldwide.
                    </p>
                </div>
                <img src="/" alt="International Shipping" class="rounded-xl h-56 w-full object-cover mt-auto" />
            </div>

            <!-- Card 3 -->
            <div class="bg-white h-full rounded-2xl shadow-sm p-6 hover:shadow-lg transition flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="text-xl font-bold">Warehousing & Distribution</h3>
                        <i class="fa-solid fa-warehouse text-orange-500 text-xl"></i>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Comprehensive storage and fulfillment solutions ensuring product safety, accessibility, and real-time tracking.
                    </p>
                </div>
                <img src="/" alt="Warehousing" class="rounded-xl h-56 w-full object-cover mt-auto" />
            </div>

            <!-- Card 4 -->
            <div class="bg-white h-full rounded-2xl shadow-sm p-6 hover:shadow-lg transition flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="text-xl font-bold">Customs & Compliance</h3>
                        <i class="fa-solid fa-file-signature text-orange-500 text-xl"></i>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Expert management of international trade regulations, customs documentation, and certification processes.
                    </p>
                </div>
                <img src="/" alt="Customs & Compliance" class="rounded-xl h-56 w-full object-cover mt-auto" />
            </div>

            <!-- Card 5 -->
            <div class="bg-white h-full rounded-2xl shadow-sm p-6 hover:shadow-lg transition flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="text-xl font-bold">Sustainable & Ethical Sourcing</h3>
                        <i class="fa-solid fa-leaf text-orange-500 text-xl"></i>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Committed to responsible sourcing practices that protect the environment and support ethical global supply chains.
                    </p>
                </div>
                <img src="/" alt="Sustainable Sourcing" class="rounded-xl h-56 w-full object-cover mt-auto" />
            </div>

            <!-- Card 6 -->
            <div class="bg-white h-full rounded-2xl shadow-sm p-6 hover:shadow-lg transition flex flex-col justify-between">
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <h3 class="text-xl font-bold">Food & Commodity Trading</h3>
                        <i class="fa-solid fa-seedling text-orange-500 text-xl"></i>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Specializing in the import and export of food items, edible oils, fertilizers, and agricultural commodities.
                    </p>
                </div>
                <img src="/" alt="Food & Commodity Trading" class="rounded-xl h-56 w-full object-cover mt-auto" />
            </div>
        </div>



        <!-- Pagination -->
        <!-- <div class="flex justify-center items-center mt-12 space-x-2">
            <button class="h-3 w-3 bg-orange-500 rounded-full"></button>
            <button class="h-3 w-3 bg-gray-300 rounded-full"></button>
            <span class="text-gray-500 text-sm font-medium ml-4">1 / 2 →</span>
        </div> -->
    </section>
</body>
<?php include 'includes/footer.php'; ?>