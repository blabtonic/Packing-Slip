<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PackingSlipController extends Controller
{
    public function index()
    {
        return view('PDFTest');
    }
 

    public function simplePDF()
    {
        PDF::SetTitle('Testing PDF');
        PDF::AddPage('L', 'letter');
        PDF::SetFont('courier', 15);

        PDF::Text(32,10,'Packing Slip');
        //Footer
        PDF::Footer(
            PDF::Text(270,175,'Page '. PDF::getAliasNumPage(). '/'. PDF::getAliasNbPages())
        );
        PDF::AddPage('L', 'letter');
        
        PDF::Output('testing.pdf');
    }
}
