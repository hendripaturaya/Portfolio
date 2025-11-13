<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = [
            (object)[
                'name' => 'Project 1',
                'description' => 'Deskripsi project web Laravel.',
                'cover_image' => 'https://via.placeholder.com/400x250?text=Project+1',
            ],
            (object)[
                'name' => 'Project 2',
                'description' => 'Deskripsi project Flutter.',
                'cover_image' => 'https://via.placeholder.com/400x250?text=Project+2',
            ],
            (object)[
                'name' => 'Project 3',
                'description' => 'Deskripsi project API Laravel.',
                'cover_image' => 'https://via.placeholder.com/400x250?text=Project+3',
            ],
        ];

        return view('pages.projects', [
            'title' => 'Semua Project',
            'projects' => $projects,
        ]);
    }
}
