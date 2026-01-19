<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Home route
Route::get('/',function (){
    return view('home');
})-> name ('home');

// About route
Route::get('/about', function() {
    $name = 'Ethan H. Campomanes';
    $course = 'Bachelor of Science in Information Technology';
    $university = 'Central Mindanao University';

    return view('about', [
        'name' => $name,
        'course' => $course,
        'university' => $university
    ]);
})->name('about');

// Projects route
Route::get('/projects', function () {
$projects = [
['title' => 'Project 1', 'description' => 'My first web project'],
['title' => 'Project 2', 'description' => 'E-commerce website'],
['title' => 'Project 3', 'description' => 'Mobile app design'],
];
return view('projects', ['projects' => $projects]);
})->name('projects');

// Contact route
Route::get('/contact', function () {
    $email = 'e.campomanes101848@gmail.com'; // Replace with YOUR email
    $phone = '+63 9053648280'; // Replace with YOUR phone
    return view('contact', [
        'email' => $email,
        'phone' => $phone
    ]);
})->name('contact');
