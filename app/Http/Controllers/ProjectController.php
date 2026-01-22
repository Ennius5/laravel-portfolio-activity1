<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = [
            ['title' => 'Personal Portfolio Website', 'description' => 'A website to showcase my skills and projects.'],
            ['title' => 'E-commerce Platform', 'description' => 'An online platform for buying and selling products.'],
            ['title' => 'Blog Application', 'description' => 'A web application for creating and managing blog posts.'],
            ['title' => 'Task Management Tool', 'description' => 'A tool to help teams manage their tasks and projects.'],
        ];
        return view('projects', ['projects' => $projects]);
    }
}
