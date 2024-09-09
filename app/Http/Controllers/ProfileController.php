<?php

// app/Http/Controllers/ProfileController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Create a new method in the controller
    public function index()
    {
        // This method will handle requests to the profile page
        return view('profile'); // Return a view named 'profile'
    }
}
