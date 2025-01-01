<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function fileUpload(Request $request)
    {
        //helper file() khusus untuk menangani request file, mengembalikan null jika tidak ada
        $gambar = $request->file("gambar");

        //membuat folder di storage/app/public, kemudian di buatkan folder gambar-gambar,
        $gambar->storePubliclyAs("gambar-gambar", $gambar, 'public');

        //ambil nama originalnya
        return 'Ok' . $gambar->getClientOriginalName();
    }
}
