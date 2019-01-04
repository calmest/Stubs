<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use PDF;

class PDFMakerController extends Controller
{
    public function classicdownload()
    {
        // grab some html

        $data = [
            'title' => 'Invoice 1014',
            'total' => '800',
            'products' => [
                'paper',
                'pen',
                'laptop'
            ]
        ];

        $pdf = PDF::loadView('pages.modern', $data);

        return $pdf->download('classic.pdf');

        // create pdf class

        // then send html to the class

        // the respond with pdf back to the browser or

        // send to the file system
    }
}
