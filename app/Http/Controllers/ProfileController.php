<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Martina Tri Rahmayanti',
            'email' => 'ry1841155@gmail.com',
            'bio' => 'Penjahatmu',
            'profile_picture' => 'p.jpg',
            'skills' => ['Baperin Orang', 'Ngeghosting']
        ];
            return view('profile', compact('profile'));
    }
}
