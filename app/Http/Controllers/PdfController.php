<?php

namespace App\Http\Controllers;

use App\Models\sppd;
use App\Models\datapegawai;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
 

    public function pdfPegawai()
    {
        $data = datapegawai::all();
        $pdf = Pdf::loadView('Pegawai.pdf', compact('data'));
        // return $pdf->download('invoice.pdf');
        return $pdf->stream('Data-Pegawai.pdf');
    }
    public function pdfSppd($id)
    {
        $data = sppd::with('datapegawai')->findorfail($id);
        return view('Sppd.pdf',compact('data'));
        // $data = sppd::with('datapegawai')->findorfail($id);
        // $pdf = Pdf::loadView('Sppd.pdf', compact('data'));
        // return $pdf->download('SPPD.pdf');
        // return $pdf->stream('Data-Pegawai.pdf');
       
    }
    public function printSppd($id)
    {
        $data = sppd::with('datapegawai')->findorfail($id);
        return view('Sppd.pdf',compact('data'));
        // $pdf = Pdf::loadView('Sppd.pdf', compact('data'));
        // $pdf->setPaper(array(0,0,609.448, 935.433), 'landscape');
        // return $pdf->stream('surat Perjalanan dinas.pdf');
       
    }
    
}
 