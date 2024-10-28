<section id="custom-menus" class="bg-[#fff3e0] py-12 border-t border-b border-gray-300">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-4xl font-serif font-bold mb-6 text-[#9c3b1f]">Custom Menus</h2>
        <p class="mb-8 text-gray-700 text-lg">Create a bespoke dining experience with our tailored menu options designed to meet your unique needs.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Custom Menu Item -->
            <div class="bg-white rounded-lg shadow-xl border border-gray-200 overflow-hidden">
                <img src="{{ asset('imgs/menuu.jpg') }}" alt="Personalized Party Menu" class="w-full h-48 object-cover rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-2xl font-serif font-semibold text-[#8c2a1a] mb-2">Personalized Party Menu</h3>
                    <p class="text-gray-600 mb-4">Craft a unique menu for your celebration with your favorite dishes and flavors.</p>
                    {{-- <a href="/order/personalized-menu" class="block text-center bg-[#8c2a1a] text-white py-2 rounded hover:bg-[#6d2020] transition">Order Now</a> --}}
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-xl border border-gray-200 overflow-hidden">
                <img src="{{ asset('imgs/themed.jpg') }}" alt="Themed Menu Packages" class="w-full h-48 object-cover rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-2xl font-serif font-semibold text-[#8c2a1a] mb-2">Themed Menu Packages</h3>
                    <p class="text-gray-600 mb-4">Choose from a variety of themed packages tailored for any occasion.</p>
                    {{-- <a href="/order/themed-menu" class="block text-center bg-[#8c2a1a] text-white py-2 rounded hover:bg-[#6d2020] transition">Order Now</a> --}}
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-xl border border-gray-200 overflow-hidden">
                <img src="{{ asset('imgs/packages.jpg') }}" alt="Corporate Packages" class="w-full h-48 object-cover rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-2xl font-serif font-semibold text-[#8c2a1a] mb-2">Corporate Packages</h3>
                    <p class="text-gray-600 mb-4">Elevate your corporate events with our expertly curated packages designed for professionals.</p>
                    {{-- <a href="/order/corporate-package" class="block text-center bg-[#8c2a1a] text-white py-2 rounded hover:bg-[#6d2020] transition">Order Now</a> --}}
                </div>
            </div>
        </div>
    </div>
</section>
