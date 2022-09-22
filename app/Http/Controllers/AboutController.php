<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $team = ['Kevin', 'Meow', 'Bark'];

        return view('about.index', [
            'team' => $team
        ]);
    }

    public function show($user)
    {
        return view('about.show', [
            'user' => $user
        ]);
    }
}
