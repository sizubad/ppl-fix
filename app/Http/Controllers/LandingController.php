<?php

namespace App\Http\Controllers;

class LandingController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Mamabi Snack'
        ];
        return view('landing', $data);
    }
}
