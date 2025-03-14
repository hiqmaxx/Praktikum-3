<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function submit(Request $request)
    {
        // Validate and store the file
        $path = $request->file('profile_photo')->store('profile_photos', 'public');

        // Gather data to pass to the view
        $data = $request->only(['name', 'email']);
        $data['photo_path'] = $path;

        return view('profile_result', ['data' => $data]);
    }
}
