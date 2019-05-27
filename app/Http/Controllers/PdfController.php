<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    //

    public function index()
    {
        $data = ['name' => 'Collins Kiprono'];
        return view('invoice', compact('data'));
    }

    public function export()
    {
        $data = ['name' => 'Collins Kiprono'];
        $pdf = PDF::loadView('invoice', compact('data'));
        return $pdf->download('invoice.pdf');
    }
}
