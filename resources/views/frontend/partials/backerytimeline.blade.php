<section id="bakery-timeline" class="bg-[#f5f5f5] py-8">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-center text-2xl font-bold mb-6" style="font-family: 'Times New Roman', Times, serif;">Bakery Timeline</h2>
        <div class="relative">
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-date">2010</div>
                    <div class="timeline-content">
                        <h3 class="font-semibold">Our Bakery is Founded</h3>
                        <p>In 2010, we opened our doors for the first time, offering freshly baked goods to our local community.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">2012</div>
                    <div class="timeline-content">
                        <h3 class="font-semibold">First Award</h3>
                        <p>We received our first award for "Best Bakery" from the local food festival, recognizing our commitment to quality.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">2015</div>
                    <div class="timeline-content">
                        <h3 class="font-semibold">Expansion of Our Menu</h3>
                        <p>We expanded our menu to include a variety of pastries and cakes, catering to diverse customer tastes.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">2018</div>
                    <div class="timeline-content">
                        <h3 class="font-semibold">Community Initiatives</h3>
                        <p>We launched several community initiatives, including baking classes for children and supporting local farmers.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">2020</div>
                    <div class="timeline-content">
                        <h3 class="font-semibold">Online Ordering Launch</h3>
                        <p>To adapt to changing times, we launched our online ordering system, making it easier for customers to enjoy our baked goods.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">2024</div>
                    <div class="timeline-content">
                        <h3 class="font-semibold">Celebrating 14 Years</h3>
                        <p>We celebrate 14 wonderful years of serving the community with delicious baked treats and continue to innovate!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    /* Basic styles for the timeline */
#bakery-timeline {
    position: relative;
}

.timeline {
    position: relative;
    padding: 20px 0;
}

.timeline-item {
    display: flex;
    flex-direction: row;
    margin-bottom: 20px;
}

.timeline-date {
    min-width: 80px; /* Adjust as necessary */
    font-weight: bold;
    color: #143009; /* Change color as necessary */
}

.timeline-content {
    background-color: white;
    border-radius: 8px;
    padding: 10px 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    position: relative;
    margin-left: 20px; /* Space between date and content */
}

/* Optional: Styling for alternating items */
.timeline-item:nth-child(even) .timeline-content {
    margin-left: 0; /* Reset margin for even items */
    margin-right: 20px; /* Add margin to the right for even items */
    margin-left: auto; /* Move content to the left */
}

/* Add a vertical line */
.timeline-item::before {
    content: '';
    position: absolute;
    left: 40px; /* Adjust for position */
    top: 0;
    bottom: 0;
    width: 2px;
    background-color: #143009; /* Vertical line color */
    z-index: 0; /* Place behind timeline content */
}

</style>