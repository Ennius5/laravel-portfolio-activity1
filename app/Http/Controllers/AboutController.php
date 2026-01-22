<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $name = "Ethan H Campomanes";
        $course = "Bachelor of Science in Information Technology";
        $university = "Central Mindanao University";
        return view('about',[
            'name' => $name,
            'course' => $course,
            'university' => $university
        ]);
    }
}
