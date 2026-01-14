<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function education()
    {
        $educations = Education::all();
        return view('pages.education', compact('educations'));
    }
}
