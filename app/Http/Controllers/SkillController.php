<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skills = [
            (object)[
                'name' => 'Laravel',
                'level' => 'Advanced',
                'description' => 'Membangun backend API dan website dengan Laravel.',
            ],
            (object)[
                'name' => 'Flutter',
                'level' => 'Intermediate',
                'description' => 'Membuat aplikasi mobile Android berbasis Flutter dan Dart.',
            ],
            (object)[
                'name' => 'MySQL',
                'level' => 'Intermediate',
                'description' => 'Mengelola dan merancang database relasional dengan MySQL.',
            ],
            (object)[
                'name' => 'Git & GitHub',
                'level' => 'Intermediate',
                'description' => 'Kolaborasi dan version control dengan Git & GitHub.',
            ],
        ];

        return view('pages.skills', [
            'title' => 'Keterampilan',
            'skills' => $skills,
        ]);
    }
}
