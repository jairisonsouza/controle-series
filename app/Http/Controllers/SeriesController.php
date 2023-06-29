<?php

namespace App\Http\Controllers;

class SeriesController
{
    public function listarSeries () {
        $series = [
            'Arrow',
            'The Hookie',
            'Chigago Fire',
            'Game of Thrones',
            'The Last of Us'
        ];

        $html = '<ul>';
        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }
        $html .= '</ul>';

        echo $html;
    }
}

?>