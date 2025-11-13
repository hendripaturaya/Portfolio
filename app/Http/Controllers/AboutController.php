<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        return view('pages.about', [
            'title' => 'Tentang Saya',
            'description' => 'Saya adalah seorang Web Developer yang berfokus pada Laravel dan Flutter. Saya suka membuat sistem berbasis API dan aplikasi yang memudahkan kehidupan sehari-hari.',
            'skills' => ['Laravel', 'Flutter', 'MySQL', 'REST API', 'Git', 'TailwindCSS']
        ]);
    }
}
