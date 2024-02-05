<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {
        // Handle the payment processing logic (simulate success for educational purposes)
        // In a real application, you would use a secure payment gateway
        return redirect()->route('payment-success')->with('success', 'Payment successful!');
    }
}