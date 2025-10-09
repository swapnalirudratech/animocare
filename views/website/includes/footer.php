<footer class="relative bg-black text-gray-300">
    <div class="absolute inset-0">
        <img src="/public/assets/images/footer.jpg" alt="Footer Background" class="w-full h-full object-cover opacity-20">
    </div>
    <div class="relative z-10 w-[80%] mx-auto py-12">
        <div class="flex items-center justify-between mb-12">
            <div class="flex items-center">
                <!-- <img src="your-logo.png" alt="Logo" class="h-14"> -->
                <h1 class="lg:text-8xl md:text-6xl text-3xl font-bold text-white/90">Animocare <span class="text-lg">Private Limited</span></h1>
            </div>
            <div class="flex flex-col gap-4 max-w-sm">
                <p class=" text-sm text-gray-300">
                    We have built a world wide reputation as an industry leader in technical textiles.
                </p>
                <div>
                    <a href="#" class="text-gray-300 hover:text-white mr-3"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-gray-300 hover:text-white mr-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-300 hover:text-white mr-3"><i class="fab fa-x-twitter"></i></a>
                    <a href="#" class="text-gray-300 hover:text-white mr-3"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>

        <div class="border-t border-gray-700 pt-10 grid md:grid-cols-3 gap-10">
            <div>
                <h3 class="font-semibold text-white mb-4">Sign Up For Newsletter</h3>
                <form class="flex flex-col space-y-4">
                    <input type="email" placeholder="Email address.." class="w-[70%] bg-transparent border-b border-gray-600 py-2 text-gray-300 focus:outline-none">
                    <button class="bg-gradient-to-r from-brand to-light text-white font-semibold py-2 px-5 rounded-full w-fit">
                        Subscribe Us →
                    </button>
                </form>
            </div>
            <div class="grid grid-cols-2 gap-6">
                <ul class="space-y-3 text-sm">
                    <li><a href="/about" class="hover:text-white">About Us</a></li>
                    <li><a href="/services" class="hover:text-white">Services</a></li>
                    <!-- <li><a href="#" class="hover:text-white">Pricing</a></li> -->
                    <li><a href="/blog" class="hover:text-white">Blog</a></li>
                    <!-- <li><a href="/contact" class="hover:text-white">Contact us</a></li> -->
                </ul>
                <ul class="space-y-3 text-sm">
                    <li><a href="/our-team" class="hover:text-white">Our Team</a></li>
                     <li><a href="/contact" class="hover:text-white">Contact us</a></li>
                    <li><a href="/faq" class="hover:text-white">F.A.Q</a></li>
                    <!-- <li><a href="/privacy-policy" class="hover:text-white">Privacy Policy</a></li> -->
                    <!-- <li><a href="/customer-feedback" class="hover:text-white">Feedbacks</a></li> -->
                    <!-- <li><a href="#" class="hover:text-white">Careers</a></li> -->
                </ul>
            </div>
            <div class="space-y-4 text-sm">
                <p class="flex items-start gap-2">
                    <span class="text-light text-lg"><i class="fas fa-phone"></i></span>
                    <a href="tel:+0844560789" class="">+022-22640051  </a>
                </p>
                <p class="flex items-start gap-2">
                    <span class="text-light text-lg"><i class="fas fa-envelope"></i></span>
                    <a href="mailto:info@animocare.com" class="">info@animocare.com</a>
                </p>
                <p class="flex items-start gap-2">
                    <span class="text-light text-lg"><i class="fas fa-location-dot"></i></span>
                   303-304 Natwar Chambers, 94 Nagindas <br> Master Road, Fort, Mumbai 400023
                </p>
            </div>
        </div>
        <div class="border-t border-gray-700 mt-10 pt-6 flex items-center justify-between text-sm text-gray-400">
            <div>
                © Copyright <?= date('Y') ?> Animocare Private Limited. All rights reserved.
            </div>
            <div>
                <a href="/terms-and-conditions" class="hover:text-white">Terms & Conditions</a> | <a href="/privacy-policy" class="hover:text-white">Privacy Policy</a>
            </div>
        </div>
    </div>

    <!-- Floating Action Button -->
    <div class="fixed top-1/2 right-0 transform -translate-y-1/2 flex flex-col gap-2 z-50">
        <a
            href="tel:+022-22640051"
            class="w-12 h-12 bg-blue-500 hover:bg-blue-600 text-white rounded-l-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-110 flex items-center justify-center"
            aria-label="Call Us">
            <i class="fa-solid fa-phone text-xl"></i>
        </a>
        <a
            href="https://wa.me/1234567890"
            target="_blank"
            class="w-12 h-12 bg-green-500 hover:bg-green-600 text-white rounded-l-lg shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-110 flex items-center justify-center"
            aria-label="Chat on WhatsApp">
            <i class="fa-brands fa-whatsapp text-2xl"></i>
        </a>
    </div>

    <div class="fixed bottom-4 right-4 z-50">
        <button
            id="scrollButton"
            class="w-12 h-12 bg-brand hover:bg-brand text-white rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-110 flex items-center justify-center opacity-0 pointer-events-none">
            <i id="scrollIcon" class="fas fa-arrow-down"></i>
        </button>
    </div>

    <script>
        const scrollButton = document.getElementById('scrollButton');
        const scrollIcon = document.getElementById('scrollIcon');

        function updateScrollButton() {
            const scrollPosition = window.scrollY;
            const pageHeight = document.documentElement.scrollHeight - window.innerHeight;

            // Show/hide button based on scroll position
            if (scrollPosition > 50) {
                scrollButton.classList.remove('opacity-0', 'pointer-events-none');
                scrollButton.classList.add('opacity-100');
            } else {
                scrollButton.classList.add('opacity-0', 'pointer-events-none');
                scrollButton.classList.remove('opacity-100');
            }

            // Change icon depending on scroll position
            if (scrollPosition > pageHeight / 2) {
                scrollIcon.classList.remove('fa-arrow-down');
                scrollIcon.classList.add('fa-arrow-up');
            } else {
                scrollIcon.classList.remove('fa-arrow-up');
                scrollIcon.classList.add('fa-arrow-down');
            }
        }

        // Scroll smoothly to top or bottom
        scrollButton.addEventListener('click', () => {
            const scrollPosition = window.scrollY;
            const pageHeight = document.documentElement.scrollHeight - window.innerHeight;

            if (scrollPosition < pageHeight / 2) {
                window.scrollTo({
                    top: document.body.scrollHeight,
                    behavior: 'smooth'
                });
            } else {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }
        });

        // Listen to scroll events
        window.addEventListener('scroll', updateScrollButton);

        // Initial check
        updateScrollButton();
    </script>

</footer>