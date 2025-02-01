<?php

namespace App\Controllers;

use App\Libraries\PdfGenerator;
use CodeIgniter\Controller;

class PdfController extends Controller
{
    public function generatePDF()
    {
        $pdf = new PdfGenerator();

        // Sample HTML content for the PDF
        $html = '<h1>Hello, CodeIgniter 4 with mPDF!</h1>
                 <p>This is a dynamically generated PDF document.</p>';

        // Set the Content-Type header to application/pdf
        $this->response->setHeader('Content-Type', 'application/pdf');

        // Optionally, set Content-Disposition header if you want to force download
        // $this->response->setHeader('Content-Disposition', 'attachment; filename="myfile.pdf"');

        // Output the PDF inline (I) or use 'D' for download, 'F' to save to file, etc.
        return $pdf->generate($html, 'myfile.pdf', 'I');
    }
}
