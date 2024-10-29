<section id="order-online" class="bg-[#f8f9fa] py-16">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <h2 class="text-5xl font-extrabold text-[#333] mb-6">Order Online</h2>
        <p class="text-lg text-gray-600 mb-8">Get your favorite treats delivered to your door! Place your order online for quick, easy, and delicious satisfaction.</p>
        
        <!-- Call to Action Button -->
        <div class="flex justify-center">
            <a href="{{ route('order.form') }}" class="bg-[#ff6f61] text-white text-xl font-semibold py-4 px-10 rounded-full shadow-lg hover:bg-[#e65c53] transition duration-200">
                Start Your Order
            </a>
        </div>
        
        <!-- Features Section -->
        <div class="flex flex-col lg:flex-row justify-between items-center mt-12 space-y-8 lg:space-y-0 lg:space-x-6">
            <!-- Feature 1: Fast Delivery -->
            <div class="flex flex-col items-center p-6 bg-white shadow-lg rounded-lg">
                <img src="{{ asset('imgs/delivery.jpg') }}" alt="Fast Delivery" class="w-16 h-16 mb-4">
                <h3 class="text-2xl font-semibold text-[#333] mb-2">Fast Delivery</h3>
                <p class="text-gray-500">Enjoy quick delivery to your doorstep, ensuring freshness and quality every time.</p>
            </div>
            
            <!-- Feature 2: Fresh Ingredients -->
            <div class="flex flex-col items-center p-6 bg-white shadow-lg rounded-lg">
                <img src="{{ asset('imgs/fresh.jpg') }}" alt="Fresh Ingredients" class="w-16 h-16 mb-4">
                <h3 class="text-2xl font-semibold text-[#333] mb-2">Fresh Ingredients</h3>
                <p class="text-gray-500">We use only the finest ingredients to bring you the best taste with every order.</p>
            </div>
            
            <!-- Feature 3: Secure Payment -->
            <div class="flex flex-col items-center p-6 bg-white shadow-lg rounded-lg">
                <img src="{{ asset('imgs/securepayment.jpg') }}" alt="Secure Payment" class="w-16 h-16 mb-4">
                <h3 class="text-2xl font-semibold text-[#333] mb-2">Secure Payment</h3>
                <p class="text-gray-500">Our online ordering system is secure, making sure your information stays protected.</p>
            </div>
        </div>
    </div>
</section>
