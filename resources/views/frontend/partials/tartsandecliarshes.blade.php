<section id="tarts-and-eclairs" class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-6 text-[#7A2D6D]">Tarts & Éclairs</h2>
        <p class="mb-8 text-gray-600 text-lg">Indulge in our exquisite tarts and light, airy éclairs, perfect for any sweet craving.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Tart Option -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                <img src="{{ asset('imgs/seasonal.jpg') }}" alt="Fruit Tart" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-2">Seasonal Fruit Tart</h3>
                    <p class="text-gray-500 mb-4">A buttery crust filled with velvety pastry cream and topped with a vibrant array of fresh seasonal fruits.</p>
                    <a href="/order/tart" class="inline-block bg-[#7A2D6D] text-white py-2 px-4 rounded hover:bg-[#a63f6d] transition">Order Now</a>
                </div>
            </div>

            <!-- Éclair Option -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                <img src="{{ asset('imgs/chocolate.jpg') }}" alt="Chocolate Éclair" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-2">Chocolate Éclair</h3>
                    <p class="text-gray-500 mb-4">Light choux pastry filled with rich chocolate cream, topped with a glossy chocolate glaze.</p>
                    <a href="/order/eclair" class="inline-block bg-[#7A2D6D] text-white py-2 px-4 rounded hover:bg-[#a63f6d] transition">Order Now</a>
                </div>
            </div>

            <!-- Additional Tart Option -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105">
                <img src="{{ asset('imgs/cream.jpg') }}" alt="Cheesecake Tart" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold mb-2">Creamy Cheesecake Tart</h3>
                    <p class="text-gray-500 mb-4">A rich and creamy cheesecake set on a crunchy biscuit base, garnished with a tangy berry compote.</p>
                    <a href="/order/cheesecake" class="inline-block bg-[#7A2D6D] text-white py-2 px-4 rounded hover:bg-[#a63f6d] transition">Order Now</a>
                </div>
            </div>
        </div>

        <div class="mt-10">
            <h4 class="text-3xl font-bold mb-4">Pastry Perfection</h4>
            <p class="text-gray-700 max-w-2xl mx-auto text-lg">Our tarts and éclairs are crafted with the finest ingredients and a dedication to pastry artistry. Each creation is a testament to our commitment to flavor and presentation, ensuring an unforgettable experience with every bite.</p>
        </div>
    </div>
</section>
