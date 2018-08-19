<?php

namespace App\Http\Controllers;
use App\Gallery;

class IndexController extends Controller
{
    public function index()
    {
        $itens = Gallery::orderBy('order')->get();

        return view('welcome', compact('itens'));
    }
}
