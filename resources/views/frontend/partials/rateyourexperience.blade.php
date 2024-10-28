<div style="background-color: #f7f7f7; padding: 2rem; font-family: 'Times New Roman', serif;">
    <div style="max-width: 1800px; margin: 0 auto; background-color: #ffffff; border-radius: 0.5rem; padding: 2rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <h2 style="font-size: 1.8rem; font-weight: bold; color: #143009; text-align: center; margin-bottom: 1rem;">Rate Your Experience</h2>
        
        <!-- Success Message -->
        @if(session('success'))
            <div style="background-color: #dff0d8; color: #3c763d; padding: 1rem; margin-bottom: 1rem; border: 1px solid #d6e9c6; border-radius: 0.25rem; text-align: center;">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('experience.rating.submit') }}" method="POST">
            @csrf
            <!-- Name Field -->
            <div style="margin-bottom: 1rem;">
                <label for="name" style="display: block; font-weight: bold; color: #666565; margin-bottom: 0.5rem;">Your Name</label>
                <input type="text" id="name" name="name" style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 0.25rem; font-size: 1rem;" required>
            </div>

            <!-- Star Rating Section -->
            <div style="margin-bottom: 1rem; text-align: center;">
                <label style="display: block; font-weight: bold; color: #666565; margin-bottom: 0.5rem;">Rate Us</label>
                <div style="font-size: 1.5rem; color: #143009;">
                    <input type="radio" id="star5" name="rating" value="5" required style="display: none;">
                    <label for="star5" style="cursor: pointer;">&#9733;</label>
                    <input type="radio" id="star4" name="rating" value="4" style="display: none;">
                    <label for="star4" style="cursor: pointer;">&#9733;</label>
                    <input type="radio" id="star3" name="rating" value="3" style="display: none;">
                    <label for="star3" style="cursor: pointer;">&#9733;</label>
                    <input type="radio" id="star2" name="rating" value="2" style="display: none;">
                    <label for="star2" style="cursor: pointer;">&#9733;</label>
                    <input type="radio" id="star1" name="rating" value="1" style="display: none;">
                    <label for="star1" style="cursor: pointer;">&#9733;</label>
                </div>
            </div>

            <!-- Comment Field -->
            <div style="margin-bottom: 1rem;">
                <label for="comments" style="display: block; font-weight: bold; color: #666565; margin-bottom: 0.5rem;">Your Comments</label>
                <textarea id="comments" name="comments" rows="4" style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 0.25rem; font-size: 1rem;"></textarea>
            </div>

            <!-- Submit Button -->
            <div style="text-align: center;">
                <button type="submit" style="background-color: #143009; color: #ffffff; padding: 0.75rem 1.5rem; border: none; border-radius: 0.25rem; font-size: 1rem; cursor: pointer;">
                    Submit Rating
                </button>
            </div>
        </form>
    </div>
</div>
