<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function listarSeries () {
        $series = [
            'Arrow',
            'Chigago Fire',
            'Game of Thrones',
            'The Last of Us',
            'The Flash'
        ];

        $html = '<ul>';
        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }

        $html .= "</ul>";

        echo $html;
    }
}
