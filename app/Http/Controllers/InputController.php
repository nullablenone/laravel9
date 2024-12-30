<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{

    // Ngambil request berdasarkan parameter only.
    public function InputFilterOnly(Request $request): string
    {
        $nama = $request->only(["depan", "belakang"]);

        return json_encode($nama);
    }

    //kebalikan dari fungsi helper only
    public function InputFilterExcept(Request $request): string
    {
        $nama = $request->except("admin");
        return json_encode($nama);
    }

    // menambah default input value ketika input tersebut tidak dikirim, kalo ada key yang sama, maka akan di timpa
    public function InputMerge(Request $request): string
    {
        $request->merge([
            "admin" => false,
        ]);
        $nama = $request->input();
        return json_encode($nama);
    }
}
