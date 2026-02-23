<header class="fixed top-0 left-0 w-full z-50 bg-white/95 backdrop-blur-sm shadow-md border-b border-gray-100">
    <nav class="flex items-center justify-between px-6 lg:px-12 py-3 relative z-50">

        <a href="/" class="flex items-center space-x-2">
            <img src="/public/assets/images/logo2.png" alt="Logo" class="w-auto h-16 rounded object-contain">
        </a>

        <?php
        $activeClass = "text-orange-600 font-bold relative after:content-[''] after:absolute after:-bottom-2 after:left-0 after:w-full after:h-0.5 after:bg-orange-600";
        $defaultClass = "text-gray-600 font-medium hover:text-orange-600 transition-colors duration-200";

        // Styling Helpers
        $columnClass = "flex flex-col space-y-1";
        $headerClass = "flex items-center gap-2 text-gray-900 font-extrabold uppercase text-base tracking-widest mb-3 pb-2 border-b border-gray-100 sticky top-0 bg-white z-10";
        $subHeaderClass = "text-orange-600 font-bold text-sm uppercase tracking-wide mt-3 mb-1";
        // Link Class: Added truncate to ensure long product names don't break layout
        $linkClass = "block text-[13px] leading-tight text-gray-500 hover:text-gray-900 hover:bg-gray-50 px-2 py-1 rounded transition-all duration-200 hover:translate-x-1";
        ?>

        <ul class="hidden lg:flex space-x-8 xl:space-x-10 items-center">
            <li><a href="/" class="<?= $page == 'home' ? $activeClass : $defaultClass ?>">Home</a></li>

            <li class="relative group">

                <a href="#" class="flex items-center gap-1 py-2 <?= $page == 'company' ? $activeClass : $defaultClass ?>">
                    Company
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </a>

                <ul class="absolute left-0 top-full mt-6 w-48 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-50 
               opacity-0 invisible translate-y-2 transition-all duration-300 
               group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 
               group-focus-within:opacity-100 group-focus-within:visible group-focus-within:translate-y-0">

                    <li>
                        <a href="/about" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-orange-600 transition-colors rounded-t-md">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="/vision-moto.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-orange-600 transition-colors rounded-b-md">
                            Vision Moto
                        </a>
                    </li>
                </ul>

            </li>

            <!-- <li class="group static h-full">
                <button class="<?= $defaultClass ?> flex items-center gap-1 cursor-pointer focus:outline-none py-4">
                    Products
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <div class="absolute left-0 top-full w-full opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform translate-y-4 group-hover:translate-y-0 z-40">
                    <div class="bg-white border-t-4 border-orange-500 shadow-[0_20px_50px_rgba(0,0,0,0.1)] w-full max-h-[85vh] overflow-y-auto">
                        <div class="container mx-auto px-6 py-8">
                            <div class="grid grid-cols-5 gap-4 divide-x divide-gray-100">

                                <div class="<?= $columnClass ?> pl-2">
                                    <h3 class="<?= $headerClass ?>"><i class="fas fa-seedling text-green-600"></i> Grains & Pulses</h3>

                                    <span class="<?= $subHeaderClass ?>">Rice</span>
                                    <a href="/product-details?id=1121-creamy" class="<?= $linkClass ?>">1121 Creamy Sella Basmati</a>
                                    <a href="/product-details?id=1121-golden" class="<?= $linkClass ?>">1121 Golden Sella Basmati</a>

                                    <span class="<?= $subHeaderClass ?>">Lentils & Beans</span>
                                    <a href="/product-details?id=green-moong" class="<?= $linkClass ?>">Green Moong (Whole & Splits)</a>
                                    <a href="/product-details?id=black-lentils" class="<?= $linkClass ?>">Black Lentils (Urad)</a>
                                    <a href="/product-details?id=chana-dal" class="<?= $linkClass ?>">Chana Dal (Chickpeas)</a>
                                    <a href="/product-details?id=yellow-peas" class="<?= $linkClass ?>">Yellow Split Peas</a>
                                    <a href="/product-details?id=red-lentils" class="<?= $linkClass ?>">Red Lentils</a>
                                    <a href="/product-details?id=black-cow-eye" class="<?= $linkClass ?>">Black Cow Eye (Whole Chawli)</a>
                                    <a href="/product-details?id=kidney-beans" class="<?= $linkClass ?>">Kidney Beans (Rajma)</a>
                                    <a href="/product-details?id=tur-dal" class="<?= $linkClass ?>">Tur Dal</a>

                                    <span class="<?= $subHeaderClass ?>">Seeds</span>
                                    <a href="/product-details?id=sesame-seed" class="<?= $linkClass ?>">Sesame Seed</a>
                                    <a href="/product-details?id=groundnut" class="<?= $linkClass ?>">Groundnut</a>
                                </div>

                                <div class="<?= $columnClass ?> pl-4">
                                    <h3 class="<?= $headerClass ?>"><i class="fas fa-mortar-pestle text-red-500"></i> Spices</h3>
                                    <a href="/product-details?id=black-pepper" class="<?= $linkClass ?> mt-2">Black Pepper</a>
                                    <a href="/product-details?id=green-cardamon" class="<?= $linkClass ?>">Green Cardamon</a>
                                    <a href="/product-details?id=cloves" class="<?= $linkClass ?>">Cloves</a>
                                    <a href="/product-details?id=cinnamon" class="<?= $linkClass ?>">Cinnamon</a>
                                    <a href="/product-details?id=nutmeg" class="<?= $linkClass ?>">Nutmeg</a>
                                    <a href="/product-details?id=red-dry-chilli" class="<?= $linkClass ?>">Red Dry Chilli</a>
                                    <a href="/product-details?id=turmeric" class="<?= $linkClass ?>">Turmeric</a>
                                    <a href="/product-details?id=coriander" class="<?= $linkClass ?>">Coriander</a>
                                    <a href="/product-details?id=cumin-seed" class="<?= $linkClass ?>">Cumin Seed</a>
                                    <a href="/product-details?id=fennel-seed" class="<?= $linkClass ?>">Fennel Seed</a>
                                    <a href="/product-details?id=fenugreek-seed" class="<?= $linkClass ?>">Fenugreek Seed</a>
                                </div>

                                <div class="<?= $columnClass ?> pl-4">
                                    <h3 class="<?= $headerClass ?>"><i class="fas fa-flask text-blue-500"></i> Oils & Petro</h3>

                                    <span class="<?= $subHeaderClass ?>">Edible Oils</span>
                                    <a href="/product-details?id=palm-oil" class="<?= $linkClass ?>">Palm Oil (Crude/Refined)</a>
                                    <a href="/product-details?id=sunflower-oil" class="<?= $linkClass ?>">Sunflower Oil</a>
                                    <a href="/product-details?id=sesame-oil" class="<?= $linkClass ?>">Sesame Seed Oil</a>
                                    <a href="/product-details?id=coconut-oil" class="<?= $linkClass ?>">Coconut Oil</a>
                                    <a href="/product-details?id=mustard-oil" class="<?= $linkClass ?>">Mustard Oil</a>
                                    <a href="/product-details?id=groundnut-oil" class="<?= $linkClass ?>">Groundnut Oil</a>

                                    <span class="<?= $subHeaderClass ?>">Petrochemicals</span>
                                    <a href="/product-details?id=crude-oil" class="<?= $linkClass ?>">Crude Oil</a>
                                    <a href="/product-details?id=diesel" class="<?= $linkClass ?>">Diesel EN 590</a>
                                    <a href="/product-details?id=gasoline" class="<?= $linkClass ?>">Gasoline Oil</a>
                                    <a href="/product-details?id=bitumen" class="<?= $linkClass ?>">Bitumen (60/70 & 80/100)</a>
                                    <a href="/product-details?id=polymers" class="<?= $linkClass ?>">Polymers (HDPE, LDPE, PVC)</a>
                                    <a href="/product-details?id=pta" class="<?= $linkClass ?>">PTA & MEG</a>
                                </div>

                                <div class="<?= $columnClass ?> pl-4">
                                    <h3 class="<?= $headerClass ?>"><i class="fas fa-cubes text-gray-500"></i> Metals</h3>

                                    <span class="<?= $subHeaderClass ?>">Ferrous</span>
                                    <a href="/product-details?id=hms-scrap" class="<?= $linkClass ?>">Heavy Metal Scrap (HMS)</a>
                                    <a href="/product-details?id=carbon-steel" class="<?= $linkClass ?>">Carbon Steel</a>
                                    <a href="/product-details?id=stainless-steel" class="<?= $linkClass ?>">Stainless Steel</a>
                                    <a href="/product-details?id=cast-iron" class="<?= $linkClass ?>">Cast Iron</a>
                                    <a href="/product-details?id=alloy-steels" class="<?= $linkClass ?>">Alloy Steels</a>
                                    <a href="/product-details?id=rail-track-scrap" class="<?= $linkClass ?>">Rail Track Scrap</a>
                                    <a href="/product-details?id=ss-304-316" class="<?= $linkClass ?>">SS 304 / SS 316</a>

                                    <span class="<?= $subHeaderClass ?>">Non-Ferrous</span>
                                    <a href="/product-details?id=copper" class="<?= $linkClass ?>">Copper (Cathode/Wire)</a>
                                    <a href="/product-details?id=aluminum" class="<?= $linkClass ?>">Aluminum (Ingot/Scrap)</a>
                                    <a href="/product-details?id=zinc" class="<?= $linkClass ?>">Zinc & Zinc Scrap</a>
                                    <a href="/product-details?id=lead" class="<?= $linkClass ?>">Lead & Lead Scrap</a>
                                    <a href="/product-details?id=nickel" class="<?= $linkClass ?>">Nickel & Nickel Scrap</a>
                                    <a href="/product-details?id=brass" class="<?= $linkClass ?>">Brass & Brass Scrap</a>
                                </div>

                                <div class="<?= $columnClass ?> pl-4">
                                    <h3 class="<?= $headerClass ?>"><i class="fas fa-mountain text-amber-700"></i> Mining & Energy</h3>

                                    <span class="<?= $subHeaderClass ?>">Minerals</span>
                                    <a href="/product-details?id=iron-ore" class="<?= $linkClass ?>">Iron Ore</a>
                                    <a href="/product-details?id=copper-ore" class="<?= $linkClass ?>">Copper Ore</a>
                                    <a href="/product-details?id=zinc-ore" class="<?= $linkClass ?>">Zinc Ore</a>
                                    <a href="/product-details?id=bauxite" class="<?= $linkClass ?>">Bauxite Ore</a>

                                    <span class="<?= $subHeaderClass ?>">Coal & Fuel</span>
                                    <a href="/product-details?id=indo-coal" class="<?= $linkClass ?>">Indonesian Coal</a>
                                    <a href="/product-details?id=african-coal" class="<?= $linkClass ?>">African Coal</a>

                                    <span class="<?= $subHeaderClass ?>">Precious</span>
                                    <a href="/product-details?id=gold" class="<?= $linkClass ?>">Gold (Dore bar)</a>
                                    <a href="/product-details?id=silver" class="<?= $linkClass ?>">Silver</a>
                                    <a href="/product-details?id=titanium" class="<?= $linkClass ?>">Titanium</a>

                                    <span class="<?= $subHeaderClass ?>">Fertilizers</span>
                                    <a href="/product-details?id=urea" class="<?= $linkClass ?>">UREA</a>
                                    <a href="/product-details?id=dap" class="<?= $linkClass ?>">DAP</a>
                                    <a href="/product-details?id=sulphur" class="<?= $linkClass ?>">Sulphur</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </li> -->



            <li class="group/main relative h-full ">

                <button class="text-gray-600  flex items-center gap-1 cursor-pointer focus:outline-none py-4 hover:text-orange-500 transition-colors">
                    Products
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover/main:rotate-180 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <ul class="absolute left-0 top-full w-72 bg-white border-t-4 border-orange-500 shadow-xl 
               opacity-0 invisible group-hover/main:opacity-100 group-hover/main:visible transition-all duration-300 
               transform translate-y-4 group-hover/main:translate-y-0 z-40 py-3">

                    <li class="relative group/item">
                        <div class="flex items-center justify-between px-6 py-3 hover:bg-orange-50 group-hover/item:bg-orange-50 cursor-pointer transition-colors">
                            <h3 class="text-gray-800 font-medium m-0">Rice</h3>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <div class="absolute left-full top-0 w-80 bg-orange-50 shadow-xl 
                        opacity-0 invisible group-hover/item:opacity-100 group-hover/item:visible transition-all duration-300 
                        transform translate-x-4 group-hover/item:translate-x-0 z-50 p-6 min-h-full">
                            <a href="/product-details?id=1121-creamy" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">1121 Creamy Sella Basmati</a>
                            <a href="/product-details?id=1121-golden" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">1121 Golden Sella Basmati</a>
                        </div>
                    </li>

                    <li class="relative group/item">
                        <div class="flex items-center justify-between px-6 py-3 hover:bg-orange-50 group-hover/item:bg-orange-50 cursor-pointer transition-colors">
                            <h3 class="text-gray-800 font-medium m-0">Sugar</h3>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <div class="absolute left-full top-0 w-80 bg-orange-50 shadow-xl 
    opacity-0 invisible group-hover/item:opacity-100 group-hover/item:visible transition-all duration-300 
    transform translate-x-4 group-hover/item:translate-x-0 z-50 p-6 min-h-full">
                            <a href="#" class="block py-1.5 text-gray-800 hover:translate-x-1 transition-transform">S-30</a>
                            <a href="#" class="block py-1.5 text-gray-800 hover:translate-x-1 transition-transform">M-30</a>
                            <a href="#" class="block py-1.5 text-gray-800 hover:translate-x-1 transition-transform">ICUMSA - 45</a>
                            <a href="#" class="block py-1.5 text-gray-800 hover:translate-x-1 transition-transform">ICUMSA -600-1200 (Raw sugar)</a>
                        </div>
                    </li>

                    <li class="relative group/item">
                        <div class="flex items-center justify-between px-6 py-3 hover:bg-orange-50 group-hover/item:bg-orange-50 cursor-pointer transition-colors">
                            <h3 class="text-gray-800 font-medium m-0">Lentils & Beans</h3>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <div class="absolute left-full top-0 w-80 bg-orange-50 shadow-xl opacity-0 invisible group-hover/item:opacity-100 group-hover/item:visible transition-all duration-300 transform translate-x-4 group-hover/item:translate-x-0 z-50 p-6">
                            <a href="/product-details?id=green-moong" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Green Moong (Whole & Splits)</a>
                            <a href="/product-details?id=black-lentils" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Black Lentils (Urad)</a>
                            <a href="/product-details?id=chana-dal" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Chana Dal (Chickpeas)</a>
                            <a href="/product-details?id=yellow-peas" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Yellow Split Peas</a>
                            <a href="/product-details?id=red-lentils" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Red Lentils</a>
                            <a href="/product-details?id=black-cow-eye" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Black Cow Eye (Whole Chawli)</a>
                            <a href="/product-details?id=kidney-beans" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Kidney Beans (Rajma)</a>
                            <a href="/product-details?id=tur-dal" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Tur Dal</a>
                        </div>
                    </li>

                    <li class="relative group/item">
                        <div class="flex items-center justify-between px-6 py-3 hover:bg-orange-50 group-hover/item:bg-orange-50 cursor-pointer transition-colors">
                            <h3 class="text-gray-800 font-medium m-0">Seeds</h3>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <div class="absolute left-full top-0 w-80 bg-orange-50 shadow-xl opacity-0 invisible group-hover/item:opacity-100 group-hover/item:visible transition-all duration-300 transform translate-x-4 group-hover/item:translate-x-0 z-50 p-6 min-h-full">
                            <a href="/product-details?id=sesame-seed" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Sesame Seed</a>
                            <a href="/product-details?id=groundnut" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Groundnut</a>
                        </div>
                    </li>

                    <li class="relative group/item">
                        <div class="flex items-center justify-between px-6 py-3 hover:bg-orange-50 group-hover/item:bg-orange-50 cursor-pointer transition-colors">
                            <h3 class="text-gray-800 font-medium m-0">Spices</h3>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <div class="absolute left-full top-0 w-80 bg-orange-50 shadow-xl opacity-0 invisible group-hover/item:opacity-100 group-hover/item:visible transition-all duration-300 transform translate-x-4 group-hover/item:translate-x-0 z-50 p-6">
                            <a href="/product-details?id=black-pepper" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Black Pepper</a>
                            <a href="/product-details?id=green-cardamon" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Green Cardamon</a>
                            <a href="/product-details?id=cloves" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Cloves</a>
                            <a href="/product-details?id=cinnamon" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Cinnamon</a>
                            <a href="/product-details?id=nutmeg" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Nutmeg</a>
                            <a href="/product-details?id=red-dry-chilli" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Red Dry Chilli</a>
                            <a href="/product-details?id=turmeric" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Turmeric</a>
                            <a href="/product-details?id=coriander" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Coriander</a>
                            <a href="/product-details?id=cumin-seed" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Cumin Seed</a>
                            <a href="/product-details?id=fennel-seed" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Fennel Seed</a>
                            <a href="/product-details?id=fenugreek-seed" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Fenugreek Seed</a>
                        </div>
                    </li>

                    <li class="relative group/item">
                        <div class="flex items-center justify-between px-6 py-3 hover:bg-orange-50 group-hover/item:bg-orange-50 cursor-pointer transition-colors">
                            <h3 class="text-gray-800 font-medium m-0">Edible Oils</h3>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <div class="absolute left-full top-0 w-80 bg-orange-50 shadow-xl opacity-0 invisible group-hover/item:opacity-100 group-hover/item:visible transition-all duration-300 transform translate-x-4 group-hover/item:translate-x-0 z-50 p-6 min-h-full">
                            <a href="/product-details?id=palm-oil" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Palm Oil (Crude/Refined)</a>
                            <a href="/product-details?id=sunflower-oil" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Sunflower Oil</a>
                            <a href="/product-details?id=sesame-oil" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Sesame Seed Oil</a>
                            <a href="/product-details?id=coconut-oil" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Coconut Oil</a>
                            <a href="/product-details?id=mustard-oil" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Mustard Oil</a>
                            <a href="/product-details?id=groundnut-oil" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Groundnut Oil</a>
                        </div>
                    </li>

                    <li class="relative group/item">
                        <div class="flex items-center justify-between px-6 py-3 hover:bg-orange-50 group-hover/item:bg-orange-50 cursor-pointer transition-colors">
                            <h3 class="text-gray-800 font-medium m-0">Petrochemicals</h3>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <div class="absolute left-full top-0 w-80 bg-orange-50 shadow-xl opacity-0 invisible group-hover/item:opacity-100 group-hover/item:visible transition-all duration-300 transform translate-x-4 group-hover/item:translate-x-0 z-50 p-6 min-h-full">
                            <a href="/product-details?id=crude-oil" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Crude Oil</a>
                            <a href="/product-details?id=diesel" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Diesel EN 590</a>
                            <a href="/product-details?id=gasoline" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Gasoline Oil</a>
                            <a href="/product-details?id=bitumen" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Bitumen (60/70 & 80/100)</a>
                            <a href="/product-details?id=polymers" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Polymers (HDPE, LDPE, PVC)</a>
                            <a href="/product-details?id=pta" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">PTA & MEG</a>
                        </div>
                    </li>

                    <li class="relative group/item">
                        <div class="flex items-center justify-between px-6 py-3 hover:bg-orange-50 group-hover/item:bg-orange-50 cursor-pointer transition-colors">
                            <h3 class="text-gray-800 font-medium m-0">Ferrous</h3>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <div class="absolute left-full top-[auto] bottom-0 w-80 bg-orange-50 shadow-xl opacity-0 invisible group-hover/item:opacity-100 group-hover/item:visible transition-all duration-300 transform translate-x-4 group-hover/item:translate-x-0 z-50 p-6">
                            <a href="/product-details?id=hms-scrap" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Heavy Metal Scrap (HMS)</a>
                            <a href="/product-details?id=carbon-steel" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Carbon Steel</a>
                            <a href="/product-details?id=stainless-steel" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Stainless Steel</a>
                            <a href="/product-details?id=cast-iron" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Cast Iron</a>
                            <a href="/product-details?id=alloy-steels" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Alloy Steels</a>
                            <a href="/product-details?id=rail-track-scrap" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Rail Track Scrap</a>
                            <a href="/product-details?id=ss-304-316" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">SS 304 / SS 316</a>
                        </div>
                    </li>

                    <li class="relative group/item">
                        <div class="flex items-center justify-between px-6 py-3 hover:bg-orange-50 group-hover/item:bg-orange-50 cursor-pointer transition-colors">
                            <h3 class="text-gray-800 font-medium m-0">Non-Ferrous</h3>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <div class="absolute left-full top-[auto] bottom-0 w-80 bg-orange-50 shadow-xl opacity-0 invisible group-hover/item:opacity-100 group-hover/item:visible transition-all duration-300 transform translate-x-4 group-hover/item:translate-x-0 z-50 p-6">
                            <a href="/product-details?id=copper" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Copper (Cathode/Wire)</a>
                            <a href="/product-details?id=aluminum" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Aluminum (Ingot/Scrap)</a>
                            <a href="/product-details?id=zinc" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Zinc & Zinc Scrap</a>
                            <a href="/product-details?id=lead" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Lead & Lead Scrap</a>
                            <a href="/product-details?id=nickel" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Nickel & Nickel Scrap</a>
                            <a href="/product-details?id=brass" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Brass & Brass Scrap</a>
                        </div>
                    </li>

                    <li class="relative group/item">
                        <div class="flex items-center justify-between px-6 py-3 hover:bg-orange-50 group-hover/item:bg-orange-50 cursor-pointer transition-colors">
                            <h3 class="text-gray-800 font-medium m-0">Minerals</h3>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <div class="absolute left-full top-[auto] bottom-0 w-80 bg-orange-50 shadow-xl opacity-0 invisible group-hover/item:opacity-100 group-hover/item:visible transition-all duration-300 transform translate-x-4 group-hover/item:translate-x-0 z-50 p-6 min-h-full">
                            <a href="/product-details?id=iron-ore" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Iron Ore</a>
                            <a href="/product-details?id=copper-ore" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Copper Ore</a>
                            <a href="/product-details?id=zinc-ore" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Zinc Ore</a>
                            <a href="/product-details?id=bauxite" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Bauxite Ore</a>
                        </div>
                    </li>

                    <li class="relative group/item">
                        <div class="flex items-center justify-between px-6 py-3 hover:bg-orange-50 group-hover/item:bg-orange-50 cursor-pointer transition-colors">
                            <h3 class="text-gray-800 font-medium m-0">Coal & Fuel</h3>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <div class="absolute left-full top-[auto] bottom-0 w-80 bg-orange-50 shadow-xl opacity-0 invisible group-hover/item:opacity-100 group-hover/item:visible transition-all duration-300 transform translate-x-4 group-hover/item:translate-x-0 z-50 p-6 min-h-full">
                            <a href="/product-details?id=indo-coal" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Indonesian Coal</a>
                            <a href="/product-details?id=african-coal" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">African Coal</a>
                        </div>
                    </li>

                    <li class="relative group/item">
                        <div class="flex items-center justify-between px-6 py-3 hover:bg-orange-50 group-hover/item:bg-orange-50 cursor-pointer transition-colors">
                            <h3 class="text-gray-800 font-medium m-0">Precious</h3>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <div class="absolute left-full top-[auto] bottom-0 w-80 bg-orange-50 shadow-xl opacity-0 invisible group-hover/item:opacity-100 group-hover/item:visible transition-all duration-300 transform translate-x-4 group-hover/item:translate-x-0 z-50 p-6 min-h-full">
                            <a href="/product-details?id=gold" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Gold (Dore bar)</a>
                            <a href="/product-details?id=silver" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Silver</a>
                            <a href="/product-details?id=titanium" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Titanium</a>
                        </div>
                    </li>

                    <li class="relative group/item">
                        <div class="flex items-center justify-between px-6 py-3 hover:bg-orange-50 group-hover/item:bg-orange-50 cursor-pointer transition-colors">
                            <h3 class="text-gray-800 font-medium m-0">Fertilizers</h3>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <div class="absolute left-full top-[auto] bottom-0 w-80 bg-orange-50 shadow-xl opacity-0 invisible group-hover/item:opacity-100 group-hover/item:visible transition-all duration-300 transform translate-x-4 group-hover/item:translate-x-0 z-50 p-6 min-h-full">
                            <a href="/product-details?id=urea" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">UREA</a>
                            <a href="/product-details?id=dap" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">DAP</a>
                            <a href="/product-details?id=sulphur" class="block py-1.5 text-gray-800  hover:translate-x-1 transition-transform">Sulphur</a>
                        </div>
                    </li>

                </ul>
            </li>

            <li><a href="#" class="<?= $page == 'our-strength' ? $activeClass : $defaultClass ?>">Our Strength</a></li>
             <li><a href="/contact" class="<?= $page == 'contact' ? $activeClass : $defaultClass ?>">Contact</a></li>
            <!-- <li><a href="/about" class="<?= $pageTitle == 'about' ? $activeClass : $defaultClass ?>">About</a></li>
            <li><a href="/blog" class="<?= $pageTitle == 'blog' ? $activeClass : $defaultClass ?>">Blog</a></li> -->


        </ul>

        <div class="">
            <!-- <a href="/contact" class="bg-orange-500 text-white px-6 py-2.5 rounded-full shadow-lg font-bold tracking-wide hover:bg-orange-600 hover:-translate-y-0.5 transition-all duration-300">
                Contact Us
            </a> -->
        </div>

        <div class="lg:hidden flex items-center">
            <button id="sidebar-toggle" class="text-gray-800 focus:outline-none p-2 rounded hover:bg-gray-100 transition">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </nav>

    <div id="mobile-sidebar" class="fixed top-0 right-0 h-screen w-[85%] sm:w-[350px] bg-white shadow-2xl transform translate-x-full transition-transform duration-300 ease-in-out z-[60] overflow-y-auto">
        <div class="flex justify-between items-center px-6 py-4 border-b border-gray-100 bg-white sticky top-0 z-20">
            <span class="text-xl font-extrabold text-gray-800 tracking-wide">MENU</span>
            <button id="sidebar-close" class="text-gray-500 hover:text-red-500 transition focus:outline-none p-2 rounded-full hover:bg-gray-100">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <ul class="flex flex-col p-4 space-y-2 pb-24">
            <li>
                <a href="/" class="flex items-center p-3 rounded-lg text-gray-600 hover:bg-orange-50 hover:text-orange-600 transition <?= $page == 'home' ? 'bg-orange-50 text-orange-600 font-semibold' : '' ?>">
                    <i class="fas fa-home w-8 text-center text-orange-400"></i> <span class="text-lg">Home</span>
                </a>
            </li>

            <li>
                <details class="group overflow-hidden rounded-lg">
                    <summary class="flex justify-between items-center p-3 cursor-pointer list-none text-gray-600 hover:bg-orange-50 hover:text-orange-600 transition select-none">
                        <div class="flex items-center">
                            <i class="fas fa-boxes w-8 text-center text-orange-400"></i> <span class="text-lg">Products</span>
                        </div>
                        <span class="transition-transform duration-300 group-open:rotate-180 text-gray-400">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </summary>
                    <div class="bg-gray-50 mt-1 pl-4 pr-2 py-4 border-l-4 border-orange-300 ml-6 space-y-6">

                        <div>
                            <h4 class="text-orange-600 text-base font-bold uppercase tracking-widest mb-2 pb-1 border-b border-gray-200">Grains & Pulses</h4>
                            <div class="space-y-1 pl-2 border-l border-gray-200">
                                <a href="/products/rice" class="block text-sm text-gray-600 hover:text-orange-600 py-1">Basmati Rice (1121 Sella)</a>
                                <a href="/products/green-moong" class="block text-sm text-gray-600 hover:text-orange-600 py-1">Green Moong</a>
                                <a href="/products/black-lentils" class="block text-sm text-gray-600 hover:text-orange-600 py-1">Black Lentils</a>
                                <a href="/products/chana-dal" class="block text-sm text-gray-600 hover:text-orange-600 py-1">Chana Dal</a>
                                <a href="/products/red-lentils" class="block text-sm text-gray-600 hover:text-orange-600 py-1">Red Lentils</a>
                                <a href="/products/kidney-beans" class="block text-sm text-gray-600 hover:text-orange-600 py-1">Kidney Beans</a>
                                <a href="/products/groundnut" class="block text-sm text-gray-600 hover:text-orange-600 py-1">Groundnut</a>
                            </div>
                        </div>

                        <div>
                            <h4 class="text-orange-600 text-base font-bold uppercase tracking-widest mb-2 pb-1 border-b border-gray-200">Spices</h4>
                            <div class="space-y-1 pl-2 border-l border-gray-200">
                                <a href="/products/pepper" class="block text-sm text-gray-600 hover:text-orange-600 py-1">Black Pepper</a>
                                <a href="/products/cardamon" class="block text-sm text-gray-600 hover:text-orange-600 py-1">Green Cardamon</a>
                                <a href="/products/cloves" class="block text-sm text-gray-600 hover:text-orange-600 py-1">Cloves</a>
                                <a href="/products/chilli" class="block text-sm text-gray-600 hover:text-orange-600 py-1">Red Dry Chilli</a>
                                <a href="/products/turmeric" class="block text-sm text-gray-600 hover:text-orange-600 py-1">Turmeric</a>
                            </div>
                        </div>

                        <div>
                            <h4 class="text-orange-600 text-base font-bold uppercase tracking-widest mb-2 pb-1 border-b border-gray-200">Oils & Petro</h4>
                            <div class="space-y-1 pl-2 border-l border-gray-200">
                                <a href="/products/palm-oil" class="block text-sm text-gray-600 hover:text-orange-600 py-1">Palm Oil</a>
                                <a href="/products/sunflower" class="block text-sm text-gray-600 hover:text-orange-600 py-1">Sunflower Oil</a>
                                <a href="/products/crude" class="block text-sm text-gray-600 hover:text-orange-600 py-1">Crude Oil</a>
                                <a href="/products/bitumen" class="block text-sm text-gray-600 hover:text-orange-600 py-1">Bitumen</a>
                                <a href="/products/polymers" class="block text-sm text-gray-600 hover:text-orange-600 py-1">Polymers</a>
                            </div>
                        </div>

                        <div>
                            <h4 class="text-orange-600 text-base font-bold uppercase tracking-widest mb-2 pb-1 border-b border-gray-200">Metals</h4>
                            <div class="space-y-1 pl-2 border-l border-gray-200">
                                <a href="/products/hms" class="block text-sm text-gray-600 hover:text-orange-600 py-1">HMS 1&2</a>
                                <a href="/products/steel" class="block text-sm text-gray-600 hover:text-orange-600 py-1">Stainless Steel</a>
                                <a href="/products/copper" class="block text-sm text-gray-600 hover:text-orange-600 py-1">Copper</a>
                                <a href="/products/aluminum" class="block text-sm text-gray-600 hover:text-orange-600 py-1">Aluminum</a>
                                <a href="/products/gold" class="block text-sm text-gray-600 hover:text-orange-600 py-1">Gold & Silver</a>
                            </div>
                        </div>

                        <div>
                            <h4 class="text-orange-600 text-base font-bold uppercase tracking-widest mb-2 pb-1 border-b border-gray-200">Mining & Fert</h4>
                            <div class="space-y-1 pl-2 border-l border-gray-200">
                                <a href="/products/iron-ore" class="block text-sm text-gray-600 hover:text-orange-600 py-1">Iron Ore</a>
                                <a href="/products/coal" class="block text-sm text-gray-600 hover:text-orange-600 py-1">Coal</a>
                                <a href="/products/urea" class="block text-sm text-gray-600 hover:text-orange-600 py-1">UREA</a>
                                <a href="/products/dap" class="block text-sm text-gray-600 hover:text-orange-600 py-1">DAP</a>
                            </div>
                        </div>

                    </div>
                </details>
            </li>

            <li><a href="/services" class="<?= $page == 'services' ? $activeClass : $defaultClass ?>"><i class="fas fa-concierge-bell w-8 text-center text-orange-400"></i> <span class="text-lg">Services</span></a></li>
            <li><a href="/about" class="<?= $pageTitle == 'about' ? $activeClass : $defaultClass ?>"><i class="fas fa-info-circle w-8 text-center text-orange-400"></i> <span class="text-lg">About</span></a></li>
            <li><a href="/blog" class="<?= $pageTitle == 'blog' ? $activeClass : $defaultClass ?>"><i class="fas fa-newspaper w-8 text-center text-orange-400"></i> <span class="text-lg">Blog</span></a></li>
        </ul>
        <div class="p-6 border-t border-gray-100 bg-white">
            <a href="/contact" class="block w-full text-center bg-orange-500 text-white py-3.5 rounded-xl font-bold text-lg shadow-md hover:bg-orange-600 transition">Contact Us</a>
        </div>
    </div>

    <div id="sidebar-overlay" class="fixed inset-0 h-screen w-screen bg-gray-900/60 backdrop-blur-[2px] hidden z-[55] transition-opacity duration-300"></div>
</header>

<script>
    const sidebar = document.getElementById('mobile-sidebar');
    const overlay = document.getElementById('sidebar-overlay');
    const openBtn = document.getElementById('sidebar-toggle');
    const closeBtn = document.getElementById('sidebar-close');

    const openSidebar = () => {
        sidebar.classList.remove('translate-x-full');
        overlay.classList.remove('hidden');
        document.body.style.overflow = 'hidden'; // Prevent background scrolling
    };

    const closeSidebar = () => {
        sidebar.classList.add('translate-x-full');
        overlay.classList.add('hidden');
        document.body.style.overflow = ''; // Restore background scrolling
    };

    openBtn.addEventListener('click', openSidebar);
    closeBtn.addEventListener('click', closeSidebar);
    overlay.addEventListener('click', closeSidebar);
</script>