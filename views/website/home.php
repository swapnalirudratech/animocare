<?php
$page = 'home';
include 'includes/header.php';
include 'includes/nav.php';
?>

<body class="overflow-x-hidden">
    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-start bg-cover bg-center" style="background-image: url('/public/assets/images/banner2.png');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
        <div class="relative z-10 max-w-3xl px-6 lg:px-20">
            <h1 class="lg:text-5xl md:text-4xl text-3xl font-bold text-white leading-tight">
                <div class="mb-3">Animocare Private Limited</div>
                <div class="mb-3 text-brand">Import & Export</div>
                <div>Global Solutions</div>
            </h1>
            <p class="mt-6 text-base text-gray-200">
                At Animocare Private Limited, we specialize in the international trade of food, edible oils, fertilizers, and more.
                Committed to quality, reliability, and seamless logistics across the globe.
            </p>
            <div class="mt-8">
                <a href="/about" class="bg-gradient-to-r from-brand to-light text-white px-6 py-3 rounded-full text-base font-semibold shadow-lg hover:opacity-90">Read More →</a>
            </div>
        </div>
    </section>

    <section class="relative py-20 overflow-hidden bg-gray-50 w-full">
        <!-- <img src="/public/assets/images/left-pattern.svg" class="absolute left-0 top-0 h-32 md:h-60" alt="" />
        <img src="/public/assets/images/right-pattern.svg" class="absolute right-0 bottom-0 h-32 md:h-60" alt="" /> -->

        <div class="w-[80%] mx-auto px-6 lg:px-0 relative z-10">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-10">

                <!-- Quality Assurance -->
                <div class="relative overflow-hidden rounded-2xl group">
                    <img src="/public/assets/images/1.jpg" alt="Quality Assurance" class="w-full h-full object-cover rounded-2xl transition-transform duration-300 group-hover:scale-105">
                    <div class="absolute inset-0 bg-black bg-opacity-70 flex flex-col justify-end items-start p-6 
                opacity-0 translate-y-full group-hover:translate-y-0 group-hover:opacity-100 
                transition-all duration-500 ease-in-out rounded-2xl">
                        <div class="bg-brand text-white px-2 py-1 text-sm rounded mb-3 font-semibold">
                            Quality Assurance
                        </div>
                        <h4 class="text-white text-xl font-bold mb-2">Verified & Certified Goods</h4>
                        <p class="text-white text-sm mb-4">
                            Every shipment is inspected to ensure top-grade food, oil, and agricultural products meet international standards.
                        </p>
                        <a href="#" class="text-sm text-light font-medium hover:underline">Read More →</a>
                    </div>
                </div>

                <!-- Secure Packaging -->
                <div class="relative overflow-hidden rounded-2xl group">
                    <img src="/public/assets/images/2.jpg" alt="Secure Packaging" class="w-full h-full object-cover rounded-2xl transition-transform duration-300 group-hover:scale-105">
                    <div class="absolute inset-0 bg-black bg-opacity-70 flex flex-col justify-end items-start p-6 
                opacity-0 translate-y-full group-hover:translate-y-0 group-hover:opacity-100 
                transition-all duration-500 ease-in-out rounded-2xl">
                        <div class="bg-brand text-white px-2 py-1 text-sm rounded mb-3 font-semibold">
                            Secure Packaging
                        </div>
                        <h4 class="text-white text-xl font-bold mb-2">Safe. Sustainable. Reliable.</h4>
                        <p class="text-white text-sm mb-4">
                            From grains to industrial goods, our eco-friendly packaging protects product integrity during long-haul exports.
                        </p>
                        <a href="#" class="text-sm text-light font-medium hover:underline">Read More →</a>
                    </div>
                </div>

                <!-- Cold Chain & Logistics -->
                <div class="relative overflow-hidden rounded-2xl group">
                    <img src="/public/assets/images/3.jpg" alt="Logistics" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                    <div class="absolute inset-0 bg-black bg-opacity-70 flex flex-col justify-end items-start p-6 
                opacity-0 translate-y-full group-hover:translate-y-0 group-hover:opacity-100 
                transition-all duration-500 ease-in-out">
                        <div class="bg-brand text-white px-2 py-1 text-sm rounded mb-3 font-semibold">
                            Global Logistics
                        </div>
                        <h4 class="text-white text-xl font-bold mb-2">Fast & Flexible Delivery</h4>
                        <p class="text-white text-sm mb-4">
                            Whether it's perishable foods or bulk fertilizers, our logistics ensure timely, secure, and cost-effective delivery.
                        </p>
                        <a href="#" class="text-sm text-light font-medium hover:underline">Read More →</a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-10">
                <!-- <p class="text-brand font-semibold text-sm uppercase">Since 2007</p> -->
                <h2 class="text-3xl md:text-4xl font-bold mt-2 leading-snug w-[70%] mx-auto">
                    Animocare Private Limited delivers premium-quality goods worldwide — from food and edible oils to fertilizers and agro-products, with certified safety and seamless logistics.
                </h2>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white relative">
        <div class="w-[80%] mx-auto grid lg:grid-cols-2 gap-12 items-center">

            <div class="h-[80vh] lg:h-[60vh] w-full">
                <img src="/public/assets/images/22.jpg"
                    alt="Industrial Warehouse"
                    class="rounded-2xl shadow-lg w-full h-full object-cover">
            </div>

            <div class="relative ">
                <span class="text-brand font-semibold text-sm uppercase tracking-wide">
                    <span class="text-brand">✦</span> About Us
                </span>
                <h2 class="text-3xl md:text-4xl font-bold leading-tight mt-2">
                    Your Trusted Partner for <br>
                    Global Import & Export <br>
                    Solutions
                </h2>
                <p class="mt-3 text-gray-600 text-base leading-relaxed">
                    <span class="font-semibold">Animocare Private Limited</span> has been at the forefront of international trade—connecting global markets with top-quality products.
                    Specializing in the export and import of food items, edible oils, fertilizers, and other agricultural commodities, we ensure safe, timely, and efficient delivery across borders.
                </p>

                <ul class="mt-3 space-y-3">
                    <li class="flex items-start">
                        <span class="text-brand text-base mr-3">✔</span>
                        <span>Serving clients in over 50 countries with a reliable global network</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-brand text-base mr-3">✔</span>
                        <span>Expert handling of customs, compliance, and documentation</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-brand text-base mr-3">✔</span>
                        <span>Committed to sustainability, ethical sourcing, and quality assurance</span>
                    </li>
                </ul>

                <div class="mt-8">
                    <a href="/about" class="bg-gradient-to-r from-brand to-light text-white px-6 py-3 rounded-full text-base font-semibold shadow-lg hover:opacity-90">View More →</a>
                </div>
            </div>

        </div>

        <!-- Bottom Images (Optional, like illustration strip in reference) -->
        <!-- <div class="mt-16 flex justify-center space-x-6">
            <img src="/public/assets/images/empty-image.jpg"
                alt="Cargo Shipment" class="rounded-xl w-40 shadow-md">

        </div> -->
    </section>

    <section class="pb-16 relative">
        <div class="w-[80%] max-md:w-[90%] mx-auto text-center">
            <span class="text-brand font-semibold text-sm uppercase tracking-wide">
                <span class="text-brand">✦</span> Featured Services
            </span>
            <h2 class="text-3xl md:text-4xl font-bold leading-tight mt-2">
                Find the Perfect Solution <br> With Our Services
            </h2>
            <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                From sourcing and export of agri-products to global logistics, Animocare Private Limited provides tailored solutions that streamline your international trade operations.
            </p>

            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Global Sourcing -->
                <div class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition">
                    <div class="w-14 h-14 mx-auto mb-6 flex items-center justify-center rounded-full bg-light text-white text-2xl">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-3">Global Sourcing</h3>
                    <p class="text-gray-600 mb-4">
                        Reliable sourcing of food, edible oils, fertilizers, and agri-products from certified producers worldwide.
                    </p>
                    <a href="#" class="text-sm font-semibold text-gray-900 hover:text-brand">Read More →</a>
                </div>

                <!-- Sea Freight -->
                <div class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition">
                    <div class="w-14 h-14 mx-auto mb-6 flex items-center justify-center rounded-full bg-light text-white text-2xl">
                        <i class="fas fa-ship"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-3">Sea Freight</h3>
                    <p class="text-gray-600 mb-4">
                        Efficient ocean freight solutions for large-volume exports, with full customs and compliance support.
                    </p>
                    <a href="#" class="text-sm font-semibold text-gray-900 hover:text-brand">Read More →</a>
                </div>

                <!-- Air Freight -->
                <div class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition">
                    <div class="w-14 h-14 mx-auto mb-6 flex items-center justify-center rounded-full bg-light text-white text-2xl">
                        <i class="fas fa-plane-departure"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-3">Air Freight</h3>
                    <p class="text-gray-600 mb-4">
                        Fast-track delivery of time-sensitive goods like fresh produce and premium products.
                    </p>
                    <a href="#" class="text-sm font-semibold text-gray-900 hover:text-brand">Read More →</a>
                </div>

                <!-- Supply Chain Management -->
                <div class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition">
                    <div class="w-14 h-14 mx-auto mb-6 flex items-center justify-center rounded-full bg-light text-white text-2xl">
                        <i class="fas fa-warehouse"></i>
                    </div>
                    <h3 class="text-lg font-bold mb-3">Supply Chain</h3>
                    <p class="text-gray-600 mb-4">
                        Integrated supply chain and warehousing solutions to ensure your products move efficiently and securely.
                    </p>
                    <a href="#" class="text-sm font-semibold text-gray-900 hover:text-brand">Read More →</a>
                </div>

            </div>

            <div class="mt-12">
                <a href="/services" class="bg-gradient-to-r from-brand to-light text-white px-6 py-3 rounded-full text-base font-semibold shadow-lg hover:opacity-90">
                    See All Services →
                </a>
            </div>
        </div>

    </section>

    <section class="py-20 max-md:pt-10 bg-gray-50 w-full items-center justify-center hidden">
        <div class="w-[80%] mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-[#172967]">OUR SERVICES</h2>
                <div class="w-24 h-1 bg-gradient-to-r from-[#eb8145] via-[#ce3c46] to-[#eb8145] mx-auto mt-4 mb-6 rounded-full">
                </div>
                <p class="text-gray-600 max-w-2xl mx-auto">Delivering high-quality agro products with seamless supply
                    chain solutions to meet your business needs.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="service-card bg-white rounded-lg shadow-lg overflow-hidden custom-transition">
                    <img src="/public/assets/images/grains.webp" alt="Grains Supply" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="w-12 h-12 rounded-full bg-[#e5574b] flex items-center justify-center mb-4">
                            <i class="fas fa-seedling text-white text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#172967] mb-3 capitalize">Grains</h3>
                        <p class="text-gray-600 mb-4">We supply high-quality wheat, rice, maize, and other grains,
                            ensuring freshness and superior nutritional value for bulk buyers.</p>
                    </div>
                </div>
                <div class="service-card bg-white rounded-lg shadow-lg overflow-hidden custom-transition">
                    <img src="/public/assets/images/pulses.avif" alt="Pulses Supply" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="w-12 h-12 rounded-full bg-[#e5574b] flex items-center justify-center mb-4">
                            <i class="fas fa-seedling text-white text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#172967] mb-3 capitalize">Pulses</h3>
                        <p class="text-gray-600 mb-4">We supply premium-quality lentils, chickpeas, black gram, green
                            gram, and more, ensuring freshness and superior nutrition for bulk buyers.</p>
                    </div>
                </div>
                <div class="service-card bg-white rounded-lg shadow-lg overflow-hidden custom-transition">
                    <img src="/public/assets/images/spices.jpg" alt="Spices Supply" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="w-12 h-12 rounded-full bg-[#e5574b] flex items-center justify-center mb-4">
                            <i class="fas fa-pepper-hot text-white text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[#172967] mb-3 capitalize">Spices</h3>
                        <p class="text-gray-600 mb-4">We supply premium-quality turmeric, cumin, coriander, black
                            pepper, cardamom, and more, ensuring rich flavor and aroma in every batch.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-[80%] mx-auto mt-10">
            <h2 class="text-3xl md:text-4xl text-center font-bold leading-tight mt-2">
                Setting the Standard for <br> Safe and Reliable Food Trade
            </h2>
        </div>
    </section>

    <section class="w-full h-auto bg-gray-50">
        <div class="w-[80%] mx-auto py-20">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <p class="text-sm font-semibold text-brand flex items-center justify-center gap-2 mb-2">
                    <span class="text-brand">✦</span> WHY CHOOSE US
                </p>
                <h2 class="text-3xl md:text-4xl font-bold mb-4 leading-snug">
                    Why Animocare Private Limited Is Your <br> Trusted Import & Export Partner
                </h2>
                <p class="text-gray-600">
                    From food and edible oils to fertilizers and bulk commodities, Animocare Private Limited delivers reliability, regulatory compliance, and world-class logistics — built on two decades of global trade expertise.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6 items-stretch">
                <div class="md:col-span-2 grid sm:grid-cols-2 gap-6">

                    <!-- Image Block -->
                    <div class="bg-white rounded-xl overflow-hidden shadow-sm h-[28vh]">
                        <img src="/public/assets/images/wholesale.jpeg" alt="Animocare Private Limited Team" class="w-full h-full object-cover">
                    </div>

                    <!-- Expertise -->
                    <div class="bg-white rounded-xl p-6 shadow-sm flex flex-col justify-between h-[28vh]">
                        <div class="flex items-center justify-between">
                            <h3 class="font-bold text-xl mb-3">Expertise <br> & Experience</h3>
                            <span class="text-light text-6xl"><i class="fas fa-user-tie"></i></span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            In international trade, we offer deep market knowledge and seamless cross-border operations.
                        </p>
                    </div>

                    <!-- Cold Chain / Storage -->
                    <div class="bg-white rounded-xl p-6 shadow-sm flex flex-col justify-between h-[28vh]">
                        <div class="flex items-center justify-between">
                            <h3 class="font-bold text-lg mb-3">Cold Chain <br> & Warehousing</h3>
                            <span class="text-light text-6xl"><i class="fas fa-snowflake"></i></span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Advanced cold storage and warehousing ensure your perishable and sensitive goods arrive in top condition.
                        </p>
                    </div>

                    <!-- Certifications -->
                    <div class="bg-white rounded-xl p-6 shadow-sm flex flex-col justify-between h-[28vh]">
                        <div class="flex items-center justify-between">
                            <h3 class="font-bold text-lg mb-3">Global Compliance</h3>
                            <span class="text-light text-6xl"><i class="fas fa-certificate"></i></span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Fully certified operations that meet export-import regulations, food safety laws, and environmental standards.
                        </p>
                    </div>
                </div>

                <!-- Side Image -->
                <div class="md:col-span-1">
                    <img src="/public/assets/images/delivery.jpeg" alt="Animocare Private Limited Warehouse" class="rounded-xl w-full h-full object-cover">
                </div>
            </div>
        </div>

    </section>



    <section class="w-full h-auto py-16 flex items-center justify-center hidden">
        <div class="flex gap-10 w-[80%] mx-auto">

            <!-- Left Column (Sticky Header) -->
            <div class="w-[40%] sticky top-36 self-start">
                <p class="text-sm text-brand font-semibold uppercase mb-3">
                    <span class="text-brand">✦</span> What They Say
                </p>
                <h1 class="text-3xl md:text-5xl font-bold leading-tight">
                    Real Words<br>
                    From Our<br>
                    Global Clients<br>
                    About Animocare Private Limited.
                </h1>
            </div>

            <!-- Right Column (Scrollable Testimonials) -->
            <div class="w-[60%] flex flex-col gap-10">

                <!-- Testimonial 1 -->
                <div class="flex gap-5 items-start">
                    <img src="/public/assets/images/profile.jpeg" alt="Client Image" class="rounded-xl w-44 h-44 object-cover">
                    <div class="flex-1">
                        <span class="inline-block bg-light text-white text-xs px-3 py-1 rounded-full font-semibold mb-2">India</span>
                        <p class="text-sm text-gray-500">
                            <i class="fas fa-quote-left mr-2 text-brand"></i>
                            Animocare Private Limited helped us expand our agri-exports across Asia. Their expertise in documentation and market compliance is truly impressive.
                        </p>
                        <h2 class="text-base font-semibold mt-2">Rahul Mehta</h2>
                        <p class="text-sm text-gray-500">Founder, Spice Roots</p>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="flex gap-5 items-start">
                    <img src="/public/assets/images/profile.jpeg" alt="Client Image" class="rounded-xl w-44 h-44 object-cover">
                    <div class="flex-1">
                        <span class="inline-block bg-light text-white text-xs px-3 py-1 rounded-full font-semibold mb-2">UAE</span>
                        <p class="text-sm text-gray-500">
                            <i class="fas fa-quote-left mr-2 text-brand"></i>
                            Thanks to Animocare Private Limited, importing bulk cooking oil has become seamless. They handle everything from sourcing to customs with precision.
                        </p>
                        <h2 class="text-base font-semibold mt-2">Fatima Al Zarooni</h2>
                        <p class="text-sm text-gray-500">Procurement Head, Green Basket</p>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="flex gap-5 items-start">
                    <img src="/public/assets/images/profile.jpeg" alt="Client Image" class="rounded-xl w-44 h-44 object-cover">
                    <div class="flex-1">
                        <span class="inline-block bg-light text-white text-xs px-3 py-1 rounded-full font-semibold mb-2">Germany</span>
                        <p class="text-sm text-gray-500">
                            <i class="fas fa-quote-left mr-2 text-brand"></i>
                            We’ve been importing organic fertilizers through Animocare Private Limited for two seasons now. Their product quality and compliance process are outstanding.
                        </p>
                        <h2 class="text-base font-semibold mt-2">Johann Müller</h2>
                        <p class="text-sm text-gray-500">CEO, EuroFresh GmbH</p>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="flex gap-5 items-start">
                    <img src="/public/assets/images/profile.jpeg" alt="Client Image" class="rounded-xl w-44 h-44 object-cover">
                    <div class="flex-1">
                        <span class="inline-block bg-light text-white text-xs px-3 py-1 rounded-full font-semibold mb-2">Kenya</span>
                        <p class="text-sm text-gray-500">
                            <i class="fas fa-quote-left mr-2 text-brand"></i>
                            Animocare Private Limited ensures timely delivery of food grains every shipment. Their warehousing and cold chain capabilities are a real asset.
                        </p>
                        <h2 class="text-base font-semibold mt-2">Grace Mwangi</h2>
                        <p class="text-sm text-gray-500">Operations Manager, AgroLink Exports</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



</body>
<?php
include 'includes/footer.php';
?>