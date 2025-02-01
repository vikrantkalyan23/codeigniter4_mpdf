<?php

namespace App\Controllers;

use App\Libraries\MpdfGenerator;
use CodeIgniter\Controller;

class PdfController extends Controller
{
    public function generatePDF()
    {
        $pdf = new MpdfGenerator();
        $html = '<h1>Hello, CodeIgniter 4 with mPDF!</h1>
                 <p>This is a dynamically generated PDF document.</p>';
        $this->response->setHeader('Content-Type', 'application/pdf');
        return $pdf->generate($html, 'myfile.pdf', 'I');
    }
}
