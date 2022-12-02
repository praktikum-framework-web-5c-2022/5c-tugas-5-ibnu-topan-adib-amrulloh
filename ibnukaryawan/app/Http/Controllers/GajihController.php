<?php

namespace App\Http\Controllers;

use App\Models\Gajih;


class GajihController extends Controller
{
    public function index()
    {
        return view('gajih.index', [
            'gajihs' => Gajih::all()
        ]);
    }
    
}
