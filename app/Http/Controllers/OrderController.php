<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Order; // Ensure the Order model exists
use App\Mail\OrderConfirmation; // Ensure the OrderConfirmation mailable exists

class OrderController extends Controller
{
    public function showOrderForm()
    {
        return view('order.form'); // Adjust the view name as necessary
    }

    public function submit(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'order_details' => 'required|string',
        ]);

        // Save the order to the database
        $order = new Order();
        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->order_details = $request->order_details;
        $order->save();

        // Send a confirmation email
        Mail::to($request->email)->send(new OrderConfirmation($order));

        // Redirect back with a success message
        return redirect()->route('order.form')->with('success', 'Your order has been placed successfully!');
    }
}