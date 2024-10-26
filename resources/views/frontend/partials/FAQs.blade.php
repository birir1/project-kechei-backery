<div style="background-color: #e6f2e6; padding: 2.5rem; font-family: 'Georgia', serif;">
    <div style="max-width: 900px; margin: 0 auto; background-color: #ffffff; border-radius: 8px; padding: 2rem; box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);">
        
        <!-- Section Header -->
        <h2 style="font-size: 2.2rem; font-weight: bold; color: #0d3b0d; text-align: center; margin-bottom: 1.5rem;">Frequently Asked Questions</h2>
        
        <!-- Accordion for FAQ Sections -->
        <div style="border-bottom: 2px solid #c2d6c2; padding-bottom: 1rem; margin-bottom: 1.5rem;">
            <!-- Orders and Payments -->
            <h3 style="font-size: 1.6rem; color: #0d3b0d; cursor: pointer;" onclick="toggleAnswer('orderPayments')">
                &#9654; Orders and Payments
            </h3>
            <div id="orderPayments" style="display: none; padding-left: 1rem; font-size: 1rem; color: #4d4d4d;">
                <p><strong>Q: How can I place an order?</strong><br>
                A: Orders can be placed online or by calling our customer service team.</p>
                <p><strong>Q: What payment methods are accepted?</strong><br>
                A: We accept all major credit cards and PayPal.</p>
                <p><strong>Q: Can I change my order after placing it?</strong><br>
                A: Contact us within 24 hours of ordering to request modifications.</p>
            </div>
        </div>
        
        <div style="border-bottom: 2px solid #c2d6c2; padding-bottom: 1rem; margin-bottom: 1.5rem;">
            <!-- Delivery and Shipping -->
            <h3 style="font-size: 1.6rem; color: #0d3b0d; cursor: pointer;" onclick="toggleAnswer('deliveryShipping')">
                &#9654; Delivery and Shipping
            </h3>
            <div id="deliveryShipping" style="display: none; padding-left: 1rem; font-size: 1rem; color: #4d4d4d;">
                <p><strong>Q: How much does delivery cost?</strong><br>
                A: Delivery fees depend on your location and order total.</p>
                <p><strong>Q: How long does delivery take?</strong><br>
                A: Standard delivery takes 3-5 business days.</p>
                <p><strong>Q: Can I track my order?</strong><br>
                A: Yes, tracking information is sent upon dispatch.</p>
            </div>
        </div>
        
        <div>
            <!-- Product Information -->
            <h3 style="font-size: 1.6rem; color: #0d3b0d; cursor: pointer;" onclick="toggleAnswer('productInfo')">
                &#9654; Product Information
            </h3>
            <div id="productInfo" style="display: none; padding-left: 1rem; font-size: 1rem; color: #4d4d4d;">
                <p><strong>Q: Are your ingredients organic?</strong><br>
                A: We prioritize organic, locally-sourced ingredients.</p>
                <p><strong>Q: Do you offer gluten-free options?</strong><br>
                A: Yes, we have gluten-free options available upon request.</p>
                <p><strong>Q: How should I store your products?</strong><br>
                A: Store in a cool, dry place, or refrigerate if needed.</p>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleAnswer(id) {
        var answerDiv = document.getElementById(id);
        answerDiv.style.display = (answerDiv.style.display === "none" || answerDiv.style.display === "") ? "block" : "none";
    }
</script>
