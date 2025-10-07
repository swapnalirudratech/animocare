<?php
$page = 'home';
include 'includes/header.php';
include 'includes/nav.php';
?>

<body class="overflow-x-hidden">
    <section class="relative h-screen flex items-center justify-start bg-cover bg-center" style="background-image: url('/assets/images/bgcontact.jpg');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>

        <div class="relative z-10 max-w-3xl px-6 lg:px-20">
            <h1 class="text-5xl md:text-6xl font-bold text-white leading-tight">
                <div class="mb-3">Our Services</div>
                <div class="mb-3 text-orange-400">Simplifying Global Trade</div>
            </h1>

            <p class="mt-6 text-base text-gray-200">
                End-to-end import and export solutions built on trust, quality, and global reach.
            </p>
        </div>
    </section>

    <section class="max-w-6xl mx-auto px-6 py-16 grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-10">
        <!-- Email -->
        <div class="bg-white shadow-sm p-6 rounded-lg border-t-4 border-orange-400">
            <div class="flex items-center mb-4">
                <div class="bg-orange-400 text-white p-3 rounded-md mr-3">
                    <i class="fa-solid fa-envelope text-2xl"></i>
                </div>
                <div>
                    <h4 class="text-sm text-gray-500 uppercase font-semibold">Mail Us Now</h4>
                    <h3 class="font-bold text-lg">Email Address</h3>
                </div>
            </div>
            <p class="text-gray-600">info@animocare.com</p>
            <p class="text-gray-600">support@animocare.com</p>
        </div>

        <!-- Phone -->
        <div class="bg-white shadow-sm p-6 rounded-lg border-t-4 border-orange-400">
            <div class="flex items-center mb-4">
                <div class="bg-orange-400 text-white p-3 rounded-md mr-3">
                    <i class="fa-solid fa-phone-volume text-2xl"></i>
                </div>
                <div>
                    <h4 class="text-sm text-gray-500 uppercase font-semibold">Call Us Anytime</h4>
                    <h3 class="font-bold text-lg">Phone Number</h3>
                </div>
            </div>
            <p class="text-gray-600">+44 20 7946 0890</p>
            <p class="text-gray-600">+44 20 7946 0891</p>
        </div>

        <!-- Location -->
        <div class="bg-white shadow-sm p-6 rounded-lg border-t-4 border-orange-400">
            <div class="flex items-center mb-4">
                <div class="bg-orange-400 text-white p-3 rounded-md mr-3">
                    <i class="fa-solid fa-location-dot text-2xl"></i>
                </div>
                <div>
                    <h4 class="text-sm text-gray-500 uppercase font-semibold">Our Location</h4>
                    <h3 class="font-bold text-lg">Office Address</h3>
                </div>
            </div>
            <p class="text-gray-600">
                1, Bloor Street West, Mumbai, Maharashtra, India
            </p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="max-w-6xl mx-auto px-6 pb-16 grid md:grid-cols-2 gap-10 items-start">
        <!-- Left Column -->
        <div>
            <span class="text-orange-500 font-semibold uppercase tracking-wide flex items-center mb-3">
                <i class="fa-solid fa-comments mr-2"></i> Let's Talk
            </span>
            <h2 class="text-4xl font-extrabold mb-4">Contact Us & Get In Touch!</h2>
            <p class="text-gray-600 mb-6">
                Have questions about our import and export services? We’re here to help. Get in touch with our team for
                inquiries, partnerships, or support.
            </p>

            <!-- Google Map -->
            <div class="w-full h-72 rounded-lg overflow-hidden shadow">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19800.47362357996!2d-0.1195194!3d51.5032976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900f9b05f%3A0xa75cf7ccf52e0f27!2sLondon%20Eye!5e0!3m2!1sen!2suk!4v1696953177732!5m2!1sen!2suk"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"></iframe>
            </div>
        </div>

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
                    class="bg-orange-500 text-white px-6 py-3 rounded-md font-semibold hover:bg-orange-600 transition">
                    SUBMIT
                </button>
            </form>
        </div>
    </section>
</body>
<?php include 'includes/footer.php'; ?>