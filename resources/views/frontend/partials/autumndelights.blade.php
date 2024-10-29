<section id="autumn-delights" class="bg-[#ffebee] py-12">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-6 text-[#c2185b]">Autumn Delights</h2>
        <p class="mb-8 text-gray-600 text-lg">Indulge in our comforting pastries that embody the flavors of autumn.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <!-- Autumn Pastry Item -->
            <div class="bg-[#ffe0b2] rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('imgs/pumpkin.jpg') }}" alt="Pumpkin Spice Muffins" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="text-2xl font-semibold text-[#8d6e63] mb-2">Pumpkin Spice Muffins</h3>
                    <p class="text-gray-500 mb-4">Moist muffins infused with pumpkin and warm spices, topped with cream cheese frosting.</p>
                    {{-- <a href="/order/pumpkin-muffins" class="block text-center bg-[#c2185b] text-white py-2 rounded hover:bg-[#9c27b0] transition">Order Now</a> --}}
                </div>
            </div>

            <div class="bg-[#ffe0b2] rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('imgs/cinnamon.jpg') }}" alt="Apple Cinnamon Galette" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="text-2xl font-semibold text-[#8d6e63] mb-2">Apple Cinnamon Galette</h3>
                    <p class="text-gray-500 mb-4">Rustic galette filled with spiced apples and baked to golden perfection.</p>
                    {{-- <a href="/order/apple-galette" class="block text-center bg-[#c2185b] text-white py-2 rounded hover:bg-[#9c27b0] transition">Order Now</a> --}}
                </div>
            </div>

            <div class="bg-[#ffe0b2] rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('imgs/maple.jpg') }}" alt="Maple Pecan Pie" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="text-2xl font-semibold text-[#8d6e63] mb-2">Maple Pecan Pie</h3>
                    <p class="text-gray-500 mb-4">A classic pecan pie sweetened with rich maple syrup, perfect for fall.</p>
                    {{-- <a href="/order/maple-pecan-pie" class="block text-center bg-[#c2185b] text-white py-2 rounded hover:bg-[#9c27b0] transition">Order Now</a> --}}
                </div>
            </div>
        </div>
    </div>
</section>
