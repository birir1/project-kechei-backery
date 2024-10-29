<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation</title>
</head>
<body>
    <h2>Thank you for your order, {{ $orderDetails['name'] }}!</h2>
    <p>We are preparing your order and will notify you once it's out for delivery.</p>
    <h3>Order Details:</h3>
    <p><strong>Item:</strong> {{ $orderDetails['item'] }}</p>
    <p><strong>Quantity:</strong> {{ $orderDetails['quantity'] }}</p>
    <p><strong>Delivery Address:</strong> {{ $orderDetails['address'] }}</p>
    <p>Thank you for choosing us!</p>
</body>
</html>
