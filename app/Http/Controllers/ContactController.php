<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $email = 'e.campomanes101848@gmail.com';
        $phone = '+63 905 364 8280';
        return view('contact', [
            'email' => $email,
            'phone' => $phone
        ]);
    }
}
