<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    /**
     * Show the About Me page.
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Show the Contact Me page.
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Handle the Contact Me form submission.
     */
    public function sendContact(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Send the email (you can customize the recipient)
        Mail::send('emails.contact', $validated, function ($mail) use ($validated) {
            $mail->from($validated['email'], $validated['name']);
            $mail->to('your-email@example.com', 'Your Name') // Replace with your email
                 ->subject('New Contact Form Submission');
        });

        // Redirect back with a success message
        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    }
}
