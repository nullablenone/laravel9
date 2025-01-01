<?php

namespace Tests\Feature;

use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile as HttpUploadedFile;
use Tests\TestCase;

class FileControllerTest extends TestCase
{
    public function testUploadFile()
    {
        //noted: pake nya yang di illuminate Http
        $gambar = HttpUploadedFile::fake()->image('yesa.png');

        $this->post('/file/upload')->assertSeeText('Ok yesa.png');
    }
}
