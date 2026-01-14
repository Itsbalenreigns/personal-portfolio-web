<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $about = About::first(); // Assuming one about entry
        return view('pages.about', compact('about'));
    }
}
