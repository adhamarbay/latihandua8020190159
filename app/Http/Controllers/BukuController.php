<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(Request $request)
    {
    $objek = \App\Buku::latest()->paginate(10);
        $data['objek'] = $objek; 
        return view('buku_index', $data); 
    }
}   