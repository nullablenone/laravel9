<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class FileStorageTest extends TestCase
{
    public function testStorage()
    {
        $storage  = Storage::disk('local');
        // membuat file, kalo ada pathnya yang sama, maka akan di timpa
        $storage->put("file.txt", "file aman");

        //mengambil atau mendapatkan file
        $file = $storage->get("file.txt");

        self::assertEquals("file aman", $file);
    }
}
