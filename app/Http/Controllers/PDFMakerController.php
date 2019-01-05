<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;

=======
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
>>>>>>> ed75deee1d00f1e7a470b5865c2dba54ce43d03c
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

<<<<<<< HEAD
        $pdf = PDF::loadView('pdf.classicdownload', $data);
=======
        $pdf = PDF::loadView('pages.modern', $data);
>>>>>>> ed75deee1d00f1e7a470b5865c2dba54ce43d03c

        return $pdf->download('classic.pdf');

        // create pdf class

        // then send html to the class

        // the respond with pdf back to the browser or

        // send to the file system
    }
}
