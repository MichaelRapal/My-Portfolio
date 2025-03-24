<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function uploadImage(Request $request)
    {
        // Validate the request to ensure an image is uploaded
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Store image in storage/app/public/images/
        $path = $request->file('image')->store('images', 'public');

        // Return response with the storage path
        return response()->json(['path' => asset('storage/' . $path)]);
    }
}
