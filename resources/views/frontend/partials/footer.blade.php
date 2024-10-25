<footer class="bg-[#143009] text-[#bdd6f0] py-8">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="footer-column">
            <h3 class="font-serif font-bold">About Us</h3>
            <p class="text-[14px] font-serif">Learn more about Kechei Centre Bakery, our history, and our mission.</p>
            <a href="{{ route('about') }}" class="hover:underline">Read More</a>
        </div>
        <div class="footer-column">
            <h3 class="font-serif font-bold">Products</h3>
            <ul class="text-[14px] font-serif">
                <li><a href="{{ route('products') }}" class="hover:underline">Cakes</a></li>
                <li><a href="{{ route('products') }}" class="hover:underline">Pastries</a></li>
                <li><a href="{{ route('products') }}" class="hover:underline">Breads</a></li>
                <li><a href="{{ route('products') }}" class="hover:underline">Specialty Items</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3 class="font-serif font-bold">Customer Service</h3>
            <ul class="text-[14px] font-serif">
                <li><a href="{{ route('faq') }}" class="hover:underline">FAQ</a></li>
                <li><a href="{{ route('contact') }}" class="hover:underline">Contact Us</a></li>
                <li><a href="{{ route('privacy') }}" class="hover:underline">Privacy Policy</a></li>
                <li><a href="{{ route('terms') }}" class="hover:underline">Terms of Service</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3 class="font-serif font-bold">Stay Connected</h3>
            <p class="text-[14px] font-serif">Follow us on social media for the latest updates:</p>
            <ul class="flex space-x-2">
                <li><a href="#" class="hover:underline">Facebook</a></li>
                <li><a href="#" class="hover:underline">Instagram</a></li>
                <li><a href="#" class="hover:underline">Twitter</a></li>
                <li><a href="#" class="hover:underline">LinkedIn</a></li>
            </ul>
        </div>
    </div>

    <hr class="my-6 border-[#666565]">

    <div class="text-center mt-4">
        <p class="text-[14px] font-serif">© {{ date('Y') }} Kechei Centre Bakery. All rights reserved.</p>
        <p class="text-[14px] font-serif">Designed by Birir Sospeter</p>
    </div>
</footer>
