<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Tampilkan form kontak
    public function create()
    {
        return view('pages.contact-create');
    }

    // Simpan hasil form (opsional)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'message' => 'required|string|max:500',
        ]);

        // Contoh penyimpanan (sementara belum ke database)
        // Nanti bisa ditambahkan model Contact jika ingin disimpan ke DB
        return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim!');
    }
}
