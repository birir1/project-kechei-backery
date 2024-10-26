<!-- Navbar with Dropdown for Blog -->
<nav class="bg-[#666565] text-white p-4 mt-0">
    <div class="max-w-7xl mx-auto flex justify-center">
        <ul class="flex space-x-4 text-sm items-center">
            <li><a href="/" class="hover:underline">Home</a></li>
            
            <!-- About Dropdown -->
            <li class="nav-item dropdown relative">
                <a href="#" class="hover:underline dropdown-toggle" id="aboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    About
                </a>
                <div class="dropdown-menu bg-[#666565] absolute z-10 hidden" aria-labelledby="aboutDropdown">
                    <a href="/ourhistory" class="dropdown-item text-white hover:underline">Our History</a>
                </div>
            </li>

            <!-- Blog Dropdown -->
            <li class="nav-item dropdown relative">
                <a href="#" class="hover:underline dropdown-toggle" id="blogDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Blog
                </a>
                <div class="dropdown-menu bg-[#666565] absolute z-10 hidden" aria-labelledby="blogDropdown">
                    <a href="/bakingtips" class="dropdown-item text-white hover:underline">Baking Tips</a>
                    <a href="/events" class="dropdown-item text-white hover:underline">Events</a>
                </div>
            </li>

            <!-- Menu Dropdown -->
            <li class="nav-item dropdown relative">
                <a href="#" class="hover:underline dropdown-toggle" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menu
                </a>
                <div class="dropdown-menu bg-[#666565] absolute z-10 hidden" aria-labelledby="menuDropdown">
                    <a href="/breads" class="dropdown-item text-white hover:underline">Breads</a>
                    <a href="/pastries" class="dropdown-item text-white hover:underline">Pastries</a>
                    <a href="/specials" class="dropdown-item text-white hover:underline">Specials</a>
                </div>
            </li>

            <li><a href="/FAQs" class="hover:underline">FAQ</a></li>
            <li><a href="/feedback" class="hover:underline">Feedback</a></li>
            {{-- <li><a href="/privacypolicy" class="hover:underline">Privacy Policy</a></li> --}}
            {{-- <li><a href="/termsofservice" class="hover:underline">Terms of Service</a></li> --}}
        </ul>
    </div>
</nav>

<!-- CSS for Dropdown and Hover Effects -->
<style>
    /* Dropdown styles */
    .dropdown-menu {
        min-width: 160px; /* Adjust width of dropdown */
    }

    /* Show dropdown on hover */
    .nav-item.dropdown:hover .dropdown-menu {
        display: block;
    }

    /* Dropdown item hover effect */
    .dropdown-item:hover {
        background-color: #bbb; /* Change background color on hover */
        color: #fff; /* Text color */
    }
</style>
