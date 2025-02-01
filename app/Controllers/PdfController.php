<?php

namespace App\Controllers;

use App\Libraries\MpdfLibrary;
use CodeIgniter\Controller;

class PdfController extends Controller
{
    public function generatePDF()
    {
        $pdf = new MpdfLibrary();
        $html = '<h1>Hello, CodeIgniter 4 with mPDF!</h1>
                 <p>This is a dynamically generated PDF document.</p>';
        $this->response->setHeader('Content-Type', 'application/pdf');
        return $pdf->generate($html, 'myfile.pdf', 'I');
    }
}
