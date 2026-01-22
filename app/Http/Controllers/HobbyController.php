<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbyController extends Controller
{
    public function index()
    {
        $hobbies = [
            ['title' => 'Designing websites', 'description' => 'Like this website!'],
            ['title' => 'Painting', 'description' => 'I do painting as a hobby, too!'],
            ['title' => 'Taking care of my dog', 'description' => 'Not really a hobby but more of a responsibility.'],
            ['title' => 'Watching chinese cartoons', 'description' => 'Anime? What\'s that?'],
        ];

            $hobo = [
        [
            'title' => 'Designing websites',
            'description' => 'Like this website!',
            'images' => [] // No images for this hobby
        ],
        [
            'title' => 'Painting',
            'description' => 'I do painting as a hobby, too!',
            'images' => [
                'wriothesley.png',
                'Auntie Nene.png',
                'Uncle Gene.png'
            ]
        ],
        [
            'title' => 'Taking care of my dog',
            'description' => 'Not really a hobby but more of a responsibility.',
            'images' => [] // Add dog images if you have them
        ],
        [
            'title' => 'Watching chinese cartoons',
            'description' => 'Anime? What\'s that?',
            'images' => [] // Add anime images if you have them
        ],
    ];
        return view('hobbies', ['hobbies' => $hobbies, 'hobo' => $hobo]);
    }

}
