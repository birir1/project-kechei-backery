<section id="spring-collection" class="bg-[#e0f7fa] py-12">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-4xl font-bold mb-6 text-[#00796b]">Spring Collection</h2>
        <p class="mb-8 text-gray-600 text-lg">Celebrate the season with our vibrant and fresh pastries inspired by the beauty of spring.</p>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <!-- Spring Pastry Item -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('imgs/rose.jpg') }}" alt="Rose Petal Macarons" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="text-2xl font-semibold text-[#e91e63] mb-2">Rose Petal Macarons</h3>
                    <p class="text-gray-500 mb-4">Delicate macarons infused with real rose petals for a floral delight.</p>
                    <a href="/order/rose-macarons" class="text-center block bg-[#00796b] text-white py-2 rounded hover:bg-[#004d40] transition">Order Now</a>
                </div>
            </div>

            <!-- Additional Spring Pastries -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('imgs/lavender.jpg') }}" alt="Lemon Lavender Tart" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="text-2xl font-semibold text-[#e91e63] mb-2">Lemon Lavender Tart</h3>
                    <p class="text-gray-500 mb-4">A zesty lemon tart with a hint of lavender for a refreshing taste.</p>
                    <a href="/order/lemon-lavender-tart" class="text-center block bg-[#00796b] text-white py-2 rounded hover:bg-[#004d40] transition">Order Now</a>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('imgs/strawberries.jpg') }}" alt="Strawberry Shortcake" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="text-2xl font-semibold text-[#e91e63] mb-2">Strawberry Shortcake</h3>
                    <p class="text-gray-500 mb-4">Light and fluffy cake layered with fresh strawberries and whipped cream.</p>
                    <a href="/order/strawberry-shortcake" class="text-center block bg-[#00796b] text-white py-2 rounded hover:bg-[#004d40] transition">Order Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
