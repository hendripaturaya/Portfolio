<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $projects = [
            (object)[
                'name' => 'Project 1',
                'description' => 'Deskripsi Project 1',
                'cover_image' => 'https://via.placeholder.com/400x250?text=Project+1',
            ],
            (object)[
                'name' => 'Project 2',
                'description' => 'Deskripsi Project 2',
                'cover_image' => 'https://via.placeholder.com/400x250?text=Project+2',
            ],
            (object)[
                'name' => 'Project 3',
                'description' => 'Deskripsi Project 3',
                'cover_image' => 'https://via.placeholder.com/400x250?text=Project+3',
            ],
        ];

        return view('pages.home', [
            'title' => 'Beranda',
            'projects' => $projects,
        ]);
    }
}
