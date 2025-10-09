<?php
$page = 'contact';
include 'includes/header.php';
include 'includes/nav.php';
?>

<body class="overflow-x-hidden">
    <section class="relative h-screen flex items-center justify-start bg-cover bg-center"
        style="background-image: url('/public/assets/images/contactbg.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>

        <div class="relative z-10 max-w-3xl px-6 lg:px-20">
            <h1 class="lg:text-5xl md:text-4xl text-3xl font-bold text-white leading-tight">
                <div class="mb-3">Contact Us</div>
            </h1>
            <p class="mt-6 text-base text-gray-200">
                Have questions about global trade or partnership opportunities? Get in touch with Animocare — your trusted partner in international import and export solutions.
            </p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="w-[60vw] max-md:w-[90vw] mx-auto pb-16 grid md:grid-cols-2 gap-10 items-start py-16">
        <!-- Right Column: Form -->
        <div class="bg-white border rounded-lg p-8">
            <h3 class="text-2xl font-semibold mb-6">Send Your Message</h3>

            <form action="#" method="POST" class="space-y-4">
                <input
                    type="text"
                    placeholder="Enter Name"
                    class="w-full border border-gray-300 rounded-md py-2 px-3 focus:ring-1 focus:ring-orange-500 focus:outline-none" />

                <div class="grid grid-cols-2 gap-4">
                    <input
                        type="email"
                        placeholder="Email Address"
                        class="border border-gray-300 rounded-md py-2 px-3 focus:ring-1 focus:ring-orange-500 focus:outline-none" />
                    <input
                        type="tel"
                        placeholder="Phone Number"
                        class="border border-gray-300 rounded-md py-2 px-3 focus:ring-1 focus:ring-orange-500 focus:outline-none" />
                </div>

                <select
                    class="w-full border border-gray-300 rounded-md py-2 px-3 focus:ring-1 focus:ring-orange-500 focus:outline-none text-gray-600">
                    <option>Select Service</option>
                    <option>Import Assistance</option>
                    <option>Export Services</option>
                    <option>Logistics & Warehousing</option>
                    <option>Compliance Support</option>
                </select>

                <textarea
                    rows="4"
                    placeholder="Message"
                    class="w-full border border-gray-300 rounded-md py-2 px-3 focus:ring-1 focus:ring-orange-500 focus:outline-none"></textarea>

                <button
                    type="submit"
                    class="bg-brand text-white px-6 py-3 rounded-md font-semibold hover:bg-orange-600 transition">
                    SUBMIT
                </button>
            </form>
        </div>
        <div>
            <img src="/public/assets/images/gif2.gif" alt="" class="w-auto h-auto">
        </div>
    </section>

    <section class="w-[60vw] max-md:w-[90vw] mx-auto pb-16 grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-10">
        <!-- Email -->
        <div class="bg-white shadow-sm p-6 rounded-lg border-t-4 border-brand">
            <div class="flex items-center mb-4">
                <div class="bg-brand text-white h-10 w-10 items-center justify-center flex rounded-md mr-3">
                    <i class="fa-solid fa-envelope text-xl"></i>
                </div>
                <div>
                    <h3 class="font-bold text-lg">Email Address</h3>
                </div>
            </div>
            <a href="mailto:info@animocare.com" class="text-gray-600">info@animocare.com</a>
        </div>

        <!-- Phone -->
        <div class="bg-white shadow-sm p-6 rounded-lg border-t-4 border-brand">
            <div class="flex items-center mb-4">
                <div class="bg-brand text-white h-10 w-10 items-center justify-center flex rounded-md mr-3">
                    <i class="fa-solid fa-phone-volume text-xl"></i>
                </div>
                <div>
                    <h3 class="font-bold text-lg">Phone Number</h3>
                </div>
            </div>
            <a href="tel:+022-22640051" class="text-gray-600">+022-22640051</a>
        </div>

        <!-- Location -->
        <div class="bg-white shadow-sm p-6 rounded-lg border-t-4 border-brand">
            <div class="flex items-center mb-4">
                <div class="bg-brand text-white h-10 w-10 items-center justify-center flex rounded-md mr-3">
                    <i class="fa-solid fa-location-dot text-xl"></i>
                </div>
                <div>
                    <h3 class="font-bold text-lg">Office Address</h3>
                </div>
            </div>
            <p class="text-gray-600">
                303-304 Natwar Chambers, 94 Nagindas Master Road, Fort, Mumbai 400023
            </p>
        </div>
    </section>

</body>
<?php include 'includes/footer.php'; ?>