<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionConfirmation;
use Illuminate\Support\Facades\Log;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        Log::info('Subscription attempt with email: ' . $request->email);
        // Validate the email input
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        // Create a new subscriber
        $subscriber = Subscriber::create(['email' => $request->email]);

        // Send confirmation email
        Mail::to($subscriber->email)->send(new SubscriptionConfirmation($subscriber));

        // Flash success message to the session
        return back()->with('success', 'Thank you for subscribing!');
    }
}
