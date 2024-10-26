<!-- Navbar with Dropdown and Hover Effects -->
<nav class="bg-[#143009] text-white p-4">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <!-- Brand -->
        <div class="text-lg font-bold" style="font-family: 'Times New Roman', Times, serif; font-size: 14px;">
            <a href="/" class="text-white">Kechei Centre Bakery</a>
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
                    <a href="/contact/feedback" class="dropdown-item text-white" style="font-family: 'Times New Roman', Times, serif; text-decoration: none;">Feedback</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<!-- CSS for Hover Effects -->
<style>
    /* Hover for main links */
    .text-white:hover {
        color: #bdd6f0;
        text-decoration: underline;
    }

    /* Dropdown hover styles */
    .dropdown-menu .dropdown-item:hover {
        background-color: #666565;
        color: #bdd6f0;
    }

    /* Make dropdown-menu appear on hover */
    .nav-item.dropdown:hover .dropdown-menu {
        display: block;
    }
</style>
