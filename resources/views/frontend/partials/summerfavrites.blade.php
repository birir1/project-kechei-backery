<section id="summer-favorites" class="bg-[#ffecb3] py-12">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-6 text-[#ff9800]">Summer Favorites</h2>
        <p class="mb-8 text-gray-600 text-lg">Dive into our delicious summer pastries that are perfect for warm days.</p>

        <div class="flex flex-wrap justify-center gap-6">
            <!-- Summer Pastry Item -->
            <div class="bg-white rounded-lg shadow-lg w-64">
                <img src="{{ asset('imgs/mango.jpg') }}" alt="Mango Mousse Cups" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-2xl font-semibold text-[#ff5722] mb-2">Mango Mousse Cups</h3>
                    <p class="text-gray-500 mb-4">Creamy mango mousse served in crispy cups for a tropical taste.</p>
                    <a href="/order/mango-mousse" class="block text-center bg-[#ff9800] text-white py-2 rounded hover:bg-[#f57c00] transition">Order Now</a>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg w-64">
                <img src="{{ asset('imgs/pineapple.jpg') }}" alt="Pineapple Upside-Down Cake" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-2xl font-semibold text-[#ff5722] mb-2">Pineapple Upside-Down Cake</h3>
                    <p class="text-gray-500 mb-4">A classic cake topped with caramelized pineapples and cherries.</p>
                    <a href="/order/pineapple-cake" class="block text-center bg-[#ff9800] text-white py-2 rounded hover:bg-[#f57c00] transition">Order Now</a>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg w-64">
                <img src="{{ asset('imgs/berry.jpg') }}" alt="Berry Pavlova" class="w-full h-40 object-cover rounded-t-lg">
                <div class="p-4">
                    <h3 class="text-2xl font-semibold text-[#ff5722] mb-2">Berry Pavlova</h3>
                    <p class="text-gray-500 mb-4">Crispy meringue topped with fresh berries and whipped cream.</p>
                    <a href="/order/berry-pavlova" class="block text-center bg-[#ff9800] text-white py-2 rounded hover:bg-[#f57c00] transition">Order Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
