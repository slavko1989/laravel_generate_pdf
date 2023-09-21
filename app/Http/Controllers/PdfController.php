<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;


class PdfController extends Controller
{

    public function generate_pdf()
    {
        /*$pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>HELLO</h1');
        return $pdf->stream();*/
        $name = 'Slave';
        $email = 'slave@gma9il.com';
                $pdf = Pdf::loadFile(public_path().'/order',['name'=>$name,'email'=>$email])->setPaper('a4', 'landscape')->save(public_path('email-template'. time() . rand('9999','9999999'). Str::random('10') . '.pdf'));
        // return $pdf->download(
    }
}
