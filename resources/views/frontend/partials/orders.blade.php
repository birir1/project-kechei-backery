<section id="order-form" class="py-16">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <h2 class="text-5xl font-extrabold text-[#333] mb-6">Place Your Order</h2>
        <p class="text-lg text-gray-600 mb-8">Fill out the form below to place your order.</p>

        <form action="{{ route('order.submit') }}" method="POST" class="mt-8 space-y-4">
            @csrf <!-- CSRF token for security -->
            <div>
                <label for="name" class="block text-lg text-left">Your Name:</label>
                <input type="text" id="name" name="name" required class="border border-gray-300 p-2 w-full rounded">
            </div>

            <div>
                <label for="email" class="block text-lg text-left">Your Email:</label>
                <input type="email" id="email" name="email" required class="border border-gray-300 p-2 w-full rounded">
            </div>

            <div>
                <label for="phone" class="block text-lg text-left">Your Phone:</label>
                <input type="text" id="phone" name="phone" required class="border border-gray-300 p-2 w-full rounded">
            </div>

            <div>
                <label for="order_details" class="block text-lg text-left">Order Details:</label>
                <textarea id="order_details" name="order_details" required class="border border-gray-300 p-2 w-full rounded"></textarea>
            </div>

            <button type="submit" class="bg-[#ff6f61] text-white text-xl font-semibold py-2 px-6 rounded shadow-lg hover:bg-[#e65c53] transition duration-200">
                Submit Order
            </button>
        </form>
        @if(session('success'))
    <div class="bg-green-500 text-white p-4 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

    </div>
</section>