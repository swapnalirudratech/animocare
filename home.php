<?php
$page = 'home';
include 'includes/header.php';
include 'includes/nav.php';
?>

<body class="overflow-x-hidden">
    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-start bg-cover bg-center" style="background-image: url('/assets/images/b2.webp');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>

        <!-- Content -->
        <div class="relative z-10 max-w-3xl px-6 lg:px-20">
            <h1 class="text-5xl md:text-6xl font-bold text-white leading-tight">
                <div class="mb-3">Fresh Food</div>
                <div class="mb-3 text-orange-400">Import & Export</div>
                <div>Solutions</div>
            </h1>
            <p class="mt-6 text-base text-gray-200">
                Delivering the world’s finest food products with care, quality, and reliability.
                Your trusted partner in global fresh food trade.
            </p>
            <div class="mt-8">
                <a href="#" class="bg-gradient-to-r from-orange-500 to-yellow-400 text-white px-6 py-3 rounded-full text-base font-semibold shadow-lg hover:opacity-90">Learn More →</a>
            </div>
        </div>

    </section>

    <section class="relative py-20 overflow-hidden bg-gray-50 w-full">
        <!-- <img src="/assets/images/left-pattern.svg" class="absolute left-0 top-0 h-32 md:h-60" alt="" />
        <img src="/assets/images/right-pattern.svg" class="absolute right-0 bottom-0 h-32 md:h-60" alt="" /> -->

        <div class="w-[80%] mx-auto px-6 lg:px-0 relative z-10">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-10">
                <div class="relative overflow-hidden rounded-2xl group">
                    <img src="/assets/images/wheat.jpg" alt="Quality Assurance" class="w-full h-full object-cover rounded-2xl transition-transform duration-300 group-hover:scale-105">

                    <div class="absolute inset-0 bg-black bg-opacity-70 flex flex-col justify-end items-start p-6 
                opacity-0 translate-y-full group-hover:translate-y-0 group-hover:opacity-100 
                transition-all duration-500 ease-in-out rounded-2xl">
                        <div class="bg-orange-500 text-white px-2 py-1 text-sm rounded mb-3 font-semibold">
                            Quality Assurance
                        </div>
                        <h4 class="text-white text-xl font-bold mb-2">Premium Food Inspection</h4>
                        <p class="text-white text-sm mb-4">
                            We conduct thorough quality checks ensuring all food products meet the highest standards.
                        </p>
                        <a href="#" class="text-sm text-yellow-300 font-medium hover:underline">Read More →</a>
                    </div>
                </div>

                <div class="relative overflow-hidden rounded-2xl group">
                    <img src="/assets/images/pulses.avif" alt="Packaging" class="w-full h-full object-cover rounded-2xl transition-transform duration-300 group-hover:scale-105">

                    <div class="absolute inset-0 bg-black bg-opacity-70 flex flex-col justify-end items-start p-6 
                opacity-0 translate-y-full group-hover:translate-y-0 group-hover:opacity-100 
                transition-all duration-500 ease-in-out rounded-2xl">
                        <div class="bg-orange-500 text-white px-2 py-1 text-sm rounded mb-3 font-semibold">
                            Secure Packaging
                        </div>
                        <h4 class="text-white text-xl font-bold mb-2">Safe & Eco-Friendly</h4>
                        <p class="text-white text-sm mb-4">
                            Our packaging solutions guarantee freshness and sustainability throughout the shipping process.
                        </p>
                        <a href="#" class="text-sm text-yellow-300 font-medium hover:underline">Read More →</a>
                    </div>
                </div>

                <div class="relative overflow-hidden rounded-2xl group">
                    <img src="/assets/images/grains.webp" alt="Cold Storage" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                    <div class="absolute inset-0 bg-black bg-opacity-70 flex flex-col justify-end items-start p-6 
                opacity-0 translate-y-full group-hover:translate-y-0 group-hover:opacity-100 
                transition-all duration-500 ease-in-out">
                        <div class="bg-orange-500 text-white px-2 py-1 text-sm rounded mb-3 font-semibold">
                            Cold Chain Logistics
                        </div>
                        <h4 class="text-white text-xl font-bold mb-2">Advanced Storage</h4>
                        <p class="text-white text-sm mb-4">
                            We ensure freshness with temperature-controlled cold storage and quick distribution systems.
                        </p>
                        <a href="#" class="text-sm text-yellow-300 font-medium hover:underline">Read More →</a>
                    </div>
                </div>

            </div>
            <div class="text-center mt-10">
                <p class="text-orange-500 font-semibold text-sm uppercase">Since 2005</p>
                <h2 class="text-3xl md:text-4xl font-bold mt-2 leading-snug max-w-3xl mx-auto">
                    We Deliver Premium Quality Food Products With Certified Safety, Global Sourcing & Seamless Logistics.
                </h2>
            </div>
        </div>
    </section>


    <section class="py-20 bg-white relative">
        <div class="w-[80%] mx-auto px-6 lg:px-12 grid lg:grid-cols-2 gap-12 items-center">

            <div class="h-[80vh] lg:h-[60vh] w-full">
                <img src="/assets/images/22.jpg"
                    alt="Industrial Warehouse"
                    class="rounded-2xl shadow-lg w-full h-full object-cover">
            </div>

            <div class="relative ">
                <span class="text-orange-500 font-semibold text-sm uppercase tracking-wide">
                    <span class="text-orange-500">✦</span> About Us</span>
                <h2 class="text-3xl md:text-4xl font-bold leading-tight mt-2">
                    The Best Solution For <br>
                    All Import & Export <br>
                    Businesses
                </h2>
                <p class="mt-3 text-gray-600 text-base leading-relaxed">
                    Since 2005, <span class="font-semibold">Animocare</span> has been connecting
                    businesses worldwide through reliable import-export solutions. From logistics
                    to supply chain optimization, we ensure smooth trade operations across continents.
                    Trusted globally, we deliver excellence in every shipment.
                </p>

                <ul class="mt-3 space-y-3">
                    <li class="flex items-start">
                        <span class="text-orange-500 text-base mr-3">✔</span>
                        <span>Global network with partners in 50+ countries</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-500 text-base mr-3">✔</span>
                        <span>Professional customs clearance & documentation</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-500 text-base mr-3">✔</span>
                        <span>Focus on sustainability & ethical trade</span>
                    </li>

                </ul>
                <div class="mt-8">
                    <a href="#" class="bg-gradient-to-r from-orange-500 to-yellow-400 text-white px-6 py-3 rounded-full text-base font-semibold shadow-lg hover:opacity-90">View More →</a>
                </div>

                <!-- <div class=" absolute -right-20 bottom-0 flex justify-center space-x-6">
                    <img src="/assets/images/empty-image.jpg"
                        alt="Logistics Warehouse" class="rounded-xl w-48 h-56 object-cover shadow-md">
                </div> -->
            </div>
        </div>

        <!-- Bottom Images (Optional, like illustration strip in reference) -->
        <!-- <div class="mt-16 flex justify-center space-x-6">
            <img src="/assets/images/empty-image.jpg"
                alt="Cargo Shipment" class="rounded-xl w-40 shadow-md">

        </div> -->
    </section>

    <section class="pb-16 relative">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 text-center"> <span class="text-orange-500 font-semibold text-sm uppercase tracking-wide"> <span class="text-orange-500">✦</span> Featured Services</span>
            <h2 class="text-3xl md:text-4xl font-bold leading-tight mt-2"> Find The Perfect Solution <br> With Our Services </h2>
            <p class="mt-4 text-gray-600 max-w-2xl mx-auto"> From trade consultancy to logistics and supply chain management, our experts deliver reliable solutions that support global commerce and strengthen your business operations worldwide. </p>
            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition">
                    <div class="w-14 h-14 mx-auto mb-6 flex items-center justify-center rounded-full bg-orange-100 text-orange-600 text-2xl"> <i class="fas fa-box"></i> </div>
                    <h3 class="text-lg font-bold mb-3">Global Shipping</h3>
                    <p class="text-gray-600 mb-4"> Fast and secure international shipping solutions for all industries. </p> <a href="#" class="text-sm font-semibold text-gray-900 hover:text-orange-500">Read More →</a>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition">
                    <div class="w-14 h-14 mx-auto mb-6 flex items-center justify-center rounded-full bg-orange-100 text-orange-600 text-2xl"> <i class="fas fa-ship"></i> </div>
                    <h3 class="text-lg font-bold mb-3">Sea Freight</h3>
                    <p class="text-gray-600 mb-4"> Reliable cargo shipping services with full customs documentation. </p> <a href="#" class="text-sm font-semibold text-gray-900 hover:text-orange-500">Read More →</a>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition">
                    <div class="w-14 h-14 mx-auto mb-6 flex items-center justify-center rounded-full bg-orange-100 text-orange-600 text-2xl"> <i class="fas fa-plane-departure"></i> </div>
                    <h3 class="text-lg font-bold mb-3">Air Freight</h3>
                    <p class="text-gray-600 mb-4"> Quick and cost-effective air cargo solutions connecting global hubs. </p> <a href="#" class="text-sm font-semibold text-gray-900 hover:text-orange-500">Read More →</a>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow hover:shadow-xl transition">
                    <div class="w-14 h-14 mx-auto mb-6 flex items-center justify-center rounded-full bg-orange-100 text-orange-600 text-2xl"> <i class="fas fa-warehouse"></i> </div>
                    <h3 class="text-lg font-bold mb-3">Supply Chain</h3>
                    <p class="text-gray-600 mb-4"> End-to-end supply chain management tailored to your business needs. </p> <a href="#" class="text-sm font-semibold text-gray-900 hover:text-orange-500">Read More →</a>
                </div>
            </div>
            <div class="mt-12"> <a href="#" class="bg-gradient-to-r from-orange-500 to-yellow-400 text-white px-6 py-3 rounded-full text-base font-semibold shadow-lg hover:opacity-90">See All Services →</a> </div>
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
                    <img src="/assets/images/grains.webp" alt="Grains Supply" class="w-full h-48 object-cover">
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
                    <img src="/assets/images/pulses.avif" alt="Pulses Supply" class="w-full h-48 object-cover">
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
                    <img src="/assets/images/spices.jpg" alt="Spices Supply" class="w-full h-48 object-cover">
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
                <p class="text-sm font-semibold text-orange-500 flex items-center justify-center gap-2 mb-2">
                    <span class="text-orange-500">✦</span> WHY CHOOSE US
                </p>
                <h2 class="text-3xl md:text-4xl font-bold mb-4 leading-snug">
                    Why Animocare Is Your <br> Trusted Food Import & Export Partner
                </h2>
                <p class="text-gray-600">
                    We combine expertise, advanced logistics, and a commitment to quality to deliver the freshest and safest food products worldwide.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6 items-stretch">
                <div class="md:col-span-2 grid sm:grid-cols-2 gap-6">
                    <div class="bg-white rounded-xl overflow-hidden shadow-sm h-[28vh]">
                        <img src="/assets/images/wholesale.jpeg" alt="Animocare Team" class="w-full h-full object-cover">
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm flex flex-col justify-between h-[28vh]">
                        <div class="flex items-center justify-between">
                            <h3 class="font-bold text-xl mb-3">Expertise <br> & Experience</h3>
                            <span class="text-yellow-500 text-6xl"><i class="fas fa-user-tie"></i></span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            Years of industry experience allow us to expertly navigate global markets and ensure smooth operations.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm flex flex-col justify-between h-[28vh]">
                        <div class="flex items-center justify-between">
                            <h3 class="font-bold text-lg mb-3">Reliable <br> Cold Chain</h3>
                            <span class="text-yellow-500 text-6xl"><i class="fas fa-snowflake"></i></span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            State-of-the-art cold storage and logistics maintain freshness and safety throughout transit.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm flex flex-col justify-between h-[28vh]">
                        <div class="flex items-center justify-between">
                            <h3 class="font-bold text-lg mb-3">Compliance <br> & Certifications</h3>
                            <span class="text-yellow-500 text-6xl"><i class="fas fa-certificate"></i></span>
                        </div>
                        <p class="text-gray-600 mb-4">
                            We adhere strictly to international standards to ensure safety, transparency, and trust.
                        </p>
                    </div>
                </div>
                <div class="md:col-span-1">
                    <img src="/assets/images/delivery.jpeg" alt="Animocare Warehouse" class="rounded-xl w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>



    <section class="w-full h-auto py-16 flex items-center justify-center">
        <div class="flex gap-10 w-[80%] mx-auto">

            <!-- Left Column (Sticky Header) -->
            <div class="w-[40%] sticky top-36 self-start">
                <p class="text-sm text-orange-500 font-semibold uppercase mb-3"><span class="text-orange-500">✦</span> What They Say</p>
                <h1 class="text-3xl md:text-5xl font-bold leading-tight">
                    Real Words<br>
                    From Our<br>
                    Global Clients<br>
                    About Animocare.
                </h1>
            </div>

            <!-- Right Column (Scrollable Testimonials) -->
            <div class="w-[60%] flex flex-col gap-10">
                <div class="flex gap-5 items-start">
                    <img src="/assets/images/profile.jpeg" alt="Client Image" class="rounded-xl w-44 h-44 object-cover">
                    <div class="flex-1">
                        <span class="inline-block bg-yellow-500 text-white text-xs px-3 py-1 rounded-full font-semibold mb-2">India</span>
                        <p class="text-sm text-gray-500">
                            <i class="fas fa-quote-left mr-2 text-orange-400"></i>
                            Animocare has completely streamlined our dry fruit exports. Their professionalism, packaging, and delivery timelines are unmatched.
                        </p>
                        <h2 class="text-base font-semibold mt-2">Rahul Mehta</h2>
                        <p class="text-sm text-gray-500">Founder, Spice Roots</p>
                    </div>
                </div>
                <div class="flex gap-5 items-start">
                    <img src="/assets/images/profile.jpeg" alt="Client Image" class="rounded-xl w-44 h-44 object-cover">
                    <div class="flex-1">
                        <span class="inline-block bg-yellow-500 text-white text-xs px-3 py-1 rounded-full font-semibold mb-2">UAE</span>
                        <p class="text-sm text-gray-500">
                            <i class="fas fa-quote-left mr-2 text-orange-400"></i>
                            Thanks to Animocare, our organic food imports are smoother and safer. They’ve become our trusted partner in food logistics.
                        </p>
                        <h2 class="text-base font-semibold mt-2">Fatima Al Zarooni</h2>
                        <p class="text-sm text-gray-500">Procurement Head, Green Basket</p>
                    </div>
                </div>
                <div class="flex gap-5 items-start">
                    <img src="/assets/images/profile.jpeg" alt="Client Image" class="rounded-xl w-44 h-44 object-cover">
                    <div class="flex-1">
                        <span class="inline-block bg-yellow-500 text-white text-xs px-3 py-1 rounded-full font-semibold mb-2">Germany</span>
                        <p class="text-sm text-gray-500">
                            <i class="fas fa-quote-left mr-2 text-orange-400"></i>
                            We’ve been importing exotic fruits through Animocare for over a year. Their quality checks and customs handling are top-notch.
                        </p>
                        <h2 class="text-base font-semibold mt-2">Johann Müller</h2>
                        <p class="text-sm text-gray-500">CEO, EuroFresh GmbH</p>
                    </div>
                </div>
                <div class="flex gap-5 items-start">
                    <img src="/assets/images/profile.jpeg" alt="Client Image" class="rounded-xl w-44 h-44 object-cover">
                    <div class="flex-1">
                        <span class="inline-block bg-yellow-500 text-white text-xs px-3 py-1 rounded-full font-semibold mb-2">India</span>
                        <p class="text-sm text-gray-500">
                            <i class="fas fa-quote-left mr-2 text-orange-400"></i>
                            Animocare has completely streamlined our dry fruit exports. Their professionalism, packaging, and delivery timelines are unmatched.
                        </p>
                        <h2 class="text-base font-semibold mt-2">Rahul Mehta</h2>
                        <p class="text-sm text-gray-500">Founder, Spice Roots</p>
                    </div>
                </div>

            </div>
        </div>
    </section>



</body>
<?php
include 'includes/footer.php';
?>