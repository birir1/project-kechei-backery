<section id="historical-photos" class="py-8 bg-[#f5f5f5]">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-center text-2xl font-bold mb-6" style="font-family: 'Times New Roman', Times, serif;">Historical Photos</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            <div class="photo-item">
                <img src="path/to/photo1.jpg" alt="Bakery Opening Day" class="w-full h-auto rounded shadow">
                <p class="text-center mt-2">Bakery Opening Day (2010)</p>
            </div>
            <div class="photo-item">
                <img src="path/to/photo2.jpg" alt="First Award Ceremony" class="w-full h-auto rounded shadow">
                <p class="text-center mt-2">First Award Ceremony (2012)</p>
            </div>
            <div class="photo-item">
                <img src="path/to/photo3.jpg" alt="Menu Expansion" class="w-full h-auto rounded shadow">
                <p class="text-center mt-2">Menu Expansion (2015)</p>
            </div>
            <div class="photo-item">
                <img src="path/to/photo4.jpg" alt="Community Initiative" class="w-full h-auto rounded shadow">
                <p class="text-center mt-2">Community Initiative (2018)</p>
            </div>
            <div class="photo-item">
                <img src="path/to/photo5.jpg" alt="Online Ordering Launch" class="w-full h-auto rounded shadow">
                <p class="text-center mt-2">Online Ordering Launch (2020)</p>
            </div>
            <div class="photo-item">
                <img src="path/to/photo6.jpg" alt="14th Anniversary Celebration" class="w-full h-auto rounded shadow">
                <p class="text-center mt-2">14th Anniversary Celebration (2024)</p>
            </div>
        </div>
    </div>
</section>


<style>
    #historical-photos {
    background-color: #f5f5f5;
}

.photo-item {
    background-color: white; /* Background for each photo item */
    border-radius: 8px; /* Rounded corners */
    overflow: hidden; /* Ensure images stay within rounded corners */
    transition: transform 0.3s ease; /* Smooth scaling on hover */
}

.photo-item:hover {
    transform: scale(1.05); /* Scale up on hover */
}

.photo-item img {
    width: 100%; /* Full width */
    height: auto; /* Maintain aspect ratio */
}

h2 {
    color: #143009; /* Custom color for the heading */
}

</style>