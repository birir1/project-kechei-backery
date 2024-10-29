<!-- resources/views/order/form.blade.php -->
@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Order Form</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('order.submit') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="order_details" class="form-label">Order Details</label>
            <textarea name="order_details" id="order_details" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Order</button>
    </form>
</div>

@endsection