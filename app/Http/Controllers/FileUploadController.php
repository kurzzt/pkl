<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class FileUploadController extends Controller
{
    // $file = $request->file('file')->getClientOriginalName();
    // $extension = $request->file('file')->extension();
    // $mime = $request->file('file')->getMimeType();
    // $clientSize = $request->file('file')->getSize();
    // $fileName = pathInfo($file, PATHINFO_FILENAME);
    // $publicId = date('Y-m-d_His'). '_'. $fileName;
    // $request->file('file')->store('images');
    // return back()->with('success', 'File uploaded successfully');

    // REFERENCE:
    // https://github.com/cloudinary-community/cloudinary-laravel
    public function storeUploads(Request $request){
        try {
            $path = 'pkl-diskominfo';
            $request->validate([
                'file' => 'required|file|max:5120|mimes:png,jpg,jpeg', // Maksimum 5MB',
            ]);
            $uploadedFile = $request->file('file')->getRealPath();
            $uploaded = Cloudinary::upload($uploadedFile, [
                'folder' => $path
            ])->getSecurePath();

            // Mendapatkan secure link dari hasil upload ke Cloudinary
            $secureLink = $uploaded->secure_url;

            return response()->json([
                'status' => true,
                'pathfile' => $secureLink,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'error' => $e->getMessage(),
            ]);
        }
    }
}