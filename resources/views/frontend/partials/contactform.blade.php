<div style="background-color: #f7f7f7; padding: 3rem 1rem; font-family: 'Times New Roman', serif;">
    <div style="max-width: 2000px; margin: 0 auto; background-color: #ffffff; border-radius: 0.5rem; padding: 2rem; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <h2 style="font-size: 2rem; font-weight: bold; color: #143009; text-align: center; margin-bottom: 1.5rem;">Contact Us</h2>
        
        {{-- <form action="{{ route('contact.submit') }}" method="POST"> --}}
            @csrf
            <div style="margin-bottom: 1.5rem;">
                <label for="name" style="font-weight: bold; color: #143009; display: block; margin-bottom: 0.5rem;">Name:</label>
                <input type="text" id="name" name="name" required style="width: 100%; padding: 0.5rem; border: 1px solid #666565; border-radius: 0.25rem; font-size: 1rem;">
            </div>

            <div style="margin-bottom: 1.5rem;">
                <label for="email" style="font-weight: bold; color: #143009; display: block; margin-bottom: 0.5rem;">Email:</label>
                <input type="email" id="email" name="email" required style="width: 100%; padding: 0.5rem; border: 1px solid #666565; border-radius: 0.25rem; font-size: 1rem;">
            </div>

            <div style="margin-bottom: 1.5rem;">
                <label for="subject" style="font-weight: bold; color: #143009; display: block; margin-bottom: 0.5rem;">Subject:</label>
                <input type="text" id="subject" name="subject" required style="width: 100%; padding: 0.5rem; border: 1px solid #666565; border-radius: 0.25rem; font-size: 1rem;">
            </div>

            <div style="margin-bottom: 1.5rem;">
                <label for="message" style="font-weight: bold; color: #143009; display: block; margin-bottom: 0.5rem;">Message:</label>
                <textarea id="message" name="message" rows="4" required style="width: 100%; padding: 0.5rem; border: 1px solid #666565; border-radius: 0.25rem; font-size: 1rem;"></textarea>
            </div>

            <div style="text-align: center;">
                <button type="submit" style="background-color: #143009; color: white; padding: 0.7rem 1.5rem; border: none; border-radius: 0.25rem; font-size: 1rem; cursor: pointer;">
                    Send Message
                </button>
            </div>
        </form>
    </div>
</div>
