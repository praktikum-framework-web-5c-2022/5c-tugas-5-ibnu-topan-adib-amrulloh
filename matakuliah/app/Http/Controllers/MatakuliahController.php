<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;


class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliah = Matakuliah::latest()->paginate(10);
        return view('matakuliah',[
            'matakuliah' => $matakuliah
        ]);
    }
}
