<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ResponseController extends Controller
{
    // noted: pake yang Illuminate\Http
    public function response(Request $request): Response
    {
        return response("test response");
    }

    // contoh bikin response untuk header
    public function header(Request $request): Response
    {
        $body = [
            'firstname' => 'muhamad',
            'lastname' => 'yesa'
        ];

        //membuat header simple
        // return response(json_encode($body), 200, ['Content-Type' => 'application/json'])

        return response(json_encode($body), 200, ['Content-Type' => 'application/json'])
            // membuat header di pisah (cuman bisa 1)
            ->header('Content-Type', 'application/json')

            // membuat header sekaligus
            ->withHeaders([
                'Author' => 'programmer yesa',
                'App' => 'Belajar Laravel'
            ]);
    }

    // response json
    public function responseJson(Request $request): JsonResponse
    {
        $body = [
            'firstname' => 'muhamad',
            'lastname' => 'yesa'
        ];
        return response()->json($body);
    }

    // response render file
    public function responseFile(Request $request): BinaryFileResponse
    {
        return response()->file(storage_path('app/public')); //isi pathnya
    }

    // response auto download
    public function responseDownload(Request $request): BinaryFileResponse
    {
        return response()->download(storage_path('app/public')); //isi pathnya
    }
}
