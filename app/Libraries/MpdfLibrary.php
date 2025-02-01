<?php

namespace App\Libraries;

use Mpdf\Mpdf;

class MpdfLibrary
{
    public function generate($html, $filename = 'document.pdf', $outputMode = 'I')
    {
        $mpdf = new Mpdf();

        // Set UTF-8 Encoding
        $mpdf->WriteHTML($html);

        // Output the PDF (I = Inline, D = Download, F = Save to file)
        return $mpdf->Output($filename, $outputMode);
    }
}
