<!-- Navbar with Logo on the Far Left and Dropdown Hover Effects -->
<nav class="bg-[#143009] text-white p-4">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        
        <!-- Logo on the Far Left -->
        <div class="flex items-center">
            <img src="{{ asset('favicon.ico') }}" alt="Kechei Centre Bakery Logo" style="max-width: 50px; height: auto; margin-right: 10px;">
            <div class="text-lg font-bold" style="font-family: 'Times New Roman', Times, serif; font-size: 14px;">
                <a href="/" class="text-white">Kechei Centre Bakery</a>
            </div>
        </div>
        
        <!-- Nav Links -->
        <ul class="flex space-x-4 items-center mb-0">
            <li>
                <a href="/events" class="text-white" style="font-family: 'Times New Roman', Times, serif; font-size: 14px; text-decoration: none;">Events</a>
            </li>
            <li>
                <a href="/products" class="text-white" style="font-family: 'Times New Roman', Times, serif; font-size: 14px; text-decoration: none;">Products</a>
            </li>
            <li>
                <a href="/orderonline" class="text-white" style="font-family: 'Times New Roman', Times, serif; font-size: 14px; text-decoration: none;">Order Online</a>
            </li>
            
            <!-- Catering Dropdown with Hover -->
            <li class="nav-item dropdown">
                <a href="#" class="text-white dropdown-toggle" id="cateringDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family: 'Times New Roman', Times, serif; font-size: 14px; text-decoration: none;">
                    Catering
                </a>
                <div class="dropdown-menu bg-[#143009]" aria-labelledby="cateringDropdown">
                    <a href="/businessevents" class="dropdown-item text-white" style="font-family: 'Times New Roman', Times, serif; text-decoration: none;">Business Events</a>
                    <a href="/collaborativecatering" class="dropdown-item text-white" style="font-family: 'Times New Roman', Times, serif; text-decoration: none;">Collaborative Catering</a>
                </div>
            </li>
            
            <!-- Contact Dropdown with Feedback -->
            <li class="nav-item dropdown">
                <a href="#" class="text-white dropdown-toggle" id="contactDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family: 'Times New Roman', Times, serif; font-size: 14px; text-decoration: none;">
                    Contact
                </a>
                <div class="dropdown-menu bg-[#143009]" aria-labelledby="contactDropdown">
                    <a href="/contact" class="dropdown-item text-white" style="font-family: 'Times New Roman', Times, serif; text-decoration: none;">Reachout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
