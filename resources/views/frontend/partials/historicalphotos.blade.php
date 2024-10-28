<section id="historical-photos" class="py-8 bg-[#f5f5f5]">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-center text-2xl font-bold mb-6" style="font-family: 'Times New Roman', Times, serif;">Historical Photos</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            <div class="photo-item">
                <img src="{{ asset('imgs/bake1.jpg') }}" alt="Bakery Opening Day" class="w-full h-auto rounded shadow">
                <p class="text-center mt-2">Bakery Opening Day (2010)</p>
            </div>
            <div class="photo-item">
                <img src="{{ asset('imgs/bake2.jpg') }}" alt="First Award Ceremony" class="w-full h-auto rounded shadow">
                <p class="text-center mt-2">First Award Ceremony (2012)</p>
            </div>
            <div class="photo-item">
                <img src="{{ asset('imgs/bake3.jpg') }}" alt="Menu Expansion" class="w-full h-auto rounded shadow">
                <p class="text-center mt-2">Menu Expansion (2015)</p>
            </div>
            <div class="photo-item">
                <img src="{{ asset('imgs/bake4.jpg') }}" alt="Community Initiative" class="w-full h-auto rounded shadow">
                <p class="text-center mt-2">Community Initiative (2018)</p>
            </div>
            <div class="photo-item">
                <img src="{{ asset('imgs/bake5.jpg') }}" alt="Online Ordering Launch" class="w-full h-auto rounded shadow">
                <p class="text-center mt-2">Online Ordering Launch (2020)</p>
            </div>
            <div class="photo-item">
                <img src="{{ asset('imgs/bake6.jpg') }}" alt="14th Anniversary Celebration" class="w-full h-auto rounded shadow">
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
        background-color: white;
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    .photo-item:hover {
        transform: scale(1.05);
    }

    h2 {
        color: #143009;
    }
</style>
