 <!-- Footer Section -->
 <footer class="relative bg-black text-gray-300">
     <!-- Background Overlay -->
     <div class="absolute inset-0">
         <img src="/public/assets/images/footer.jpg" alt="Footer Background" class="w-full h-full object-cover opacity-20">
     </div>
     <div class="relative z-10 w-[80%] mx-auto py-12">
         <!-- Logo & Tagline -->
         <div class="flex items-center justify-between mb-12">
             <div class="flex items-center space-x-3">
                 <!-- <img src="your-logo.png" alt="Logo" class="h-14"> -->
                 <h1 class="text-8xl font-bold text-white/90">Animocare</h1>
             </div>
             <div class="flex flex-col gap-4 max-w-sm">
                 <p class=" text-sm text-gray-300">
                     We have built a world wide reputation as an industry leader in technical textiles.
                 </p>
                 <!-- Social Media -->
                 <div>
                     <a href="#" class="text-gray-300 hover:text-white mr-3"><i class="fab fa-facebook"></i></a>
                     <a href="#" class="text-gray-300 hover:text-white mr-3"><i class="fab fa-instagram"></i></a>
                     <a href="#" class="text-gray-300 hover:text-white mr-3"><i class="fab fa-x-twitter"></i></a>
                     <a href="#" class="text-gray-300 hover:text-white mr-3"><i class="fab fa-linkedin"></i></a>
                 </div>
             </div>
         </div>

         <div class="border-t border-gray-700 pt-10 grid md:grid-cols-3 gap-10">
             <!-- Newsletter -->
             <div>
                 <h3 class="font-semibold text-white mb-4">Sign Up For Newsletter</h3>
                 <form class="flex flex-col space-y-4">
                     <input type="email" placeholder="Email address.." class="w-[70%] bg-transparent border-b border-gray-600 py-2 text-gray-300 focus:outline-none">
                     <button class="bg-gradient-to-r from-orange-500 to-yellow-400 text-white font-semibold py-2 px-5 rounded-full w-fit">
                         Subscribe Us →
                     </button>
                 </form>
             </div>

             <!-- Quick Links -->
             <div class="grid grid-cols-2 gap-6">
                 <ul class="space-y-3 text-sm">
                     <li><a href="/about" class="hover:text-white">About Us</a></li>
                     <li><a href="/services" class="hover:text-white">Services</a></li>
                     <!-- <li><a href="#" class="hover:text-white">Pricing</a></li> -->
                     <li><a href="/blog" class="hover:text-white">Blog</a></li>
                     <li><a href="/contact" class="hover:text-white">Contact us</a></li>
                 </ul>
                 <ul class="space-y-3 text-sm">
                     <li><a href="/our-team" class="hover:text-white">Our Team</a></li>
                     <li><a href="/faq" class="hover:text-white">F.A.Q</a></li>
                     <li><a href="/privacy-policy" class="hover:text-white">Privacy Policy</a></li>
                     <li><a href="/customer-feedback" class="hover:text-white">Feedbacks</a></li>
                     <!-- <li><a href="#" class="hover:text-white">Careers</a></li> -->
                 </ul>
             </div>

             <!-- Contact Info -->
             <div class="space-y-4 text-sm">
                 <p class="flex items-start gap-2">
                     <span class="text-yellow-400 text-lg"><i class="fas fa-phone"></i></span>
                     <a href="tel:+0844560789" class="font-semibold">+(084) 456-0789</a>
                 </p>
                 <p class="flex items-start gap-2">
                     <span class="text-yellow-400 text-lg"><i class="fas fa-envelope"></i></span>
                     <a href="mailto:support@example.com" class="font-semibold">support@example.com</a>
                 </p>
                 <p class="flex items-start gap-2">
                     <span class="text-yellow-400 text-lg"><i class="fas fa-location-dot"></i></span>
                     5609 E Sprague Ave, Spokane Valley,<br> WA 99212, USA
                 </p>
             </div>
         </div>

         <!-- Bottom Copyright -->
         <div class="border-t border-gray-700 mt-10 pt-6 flex items-center justify-between text-sm text-gray-400">
             <div>
                 © Copyright <?= date('Y') ?> Animocare. All rights reserved.
             </div>
             <div>
                 <a href="#" class="hover:text-white">Terms & Conditions</a> | <a href="#" class="hover:text-white">Privacy Policy</a>
             </div>
         </div>
     </div>
 </footer>