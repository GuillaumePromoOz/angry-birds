<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BirdsController extends Controller
{
    // Home
    public function index()
    {
        return view('birds.index');
    }

    // Get one bird
    public function show($id)
    {
        return $id;
    }
}
