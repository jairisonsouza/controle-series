<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request) {
        $series = [
            'Arrow',
            'Chigago Fire',
            'Game of Thrones',
            'The Last of Us',
            'The Flash'
        ];

        return view ('series.index')->with('series', $series); 
    }

    public function create() {
        return view('series.create');
    }
}
