<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\sppd;
use App\Models\datapegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $data = DB::table('sppd')
            ->select('created_at', DB::raw('COUNT(*) as jumlah_data'))
            ->groupBy('created_at')
            ->get();

        $labels = $data->pluck('created_at');
        $values = $data->pluck('jumlah_data');
        $sppd = sppd::count();
        $pegawai = datapegawai::count();
        $madya = datapegawai::where('jabatan','Guru Madya')->count();
        $muda = datapegawai::where('jabatan','Guru Muda')->count();
        $pertama = datapegawai::where('jabatan','Guru Pertama')->count();
        $pelaksana_guru = datapegawai::where('jabatan','Pelaksana Guru')->count();
        $asn = datapegawai::where('jabatan','ASN PPPK GURU')->count();
        $pelaksana = datapegawai::where('jabatan','Pelaksana')->count();
        $honorer = datapegawai::where('jabatan','Guru Honorer Provinsi')->count();
        $tidak_tetap = datapegawai::where('jabatan','Guru Tidak Tetap')->count();
        $satpam = datapegawai::where('jabatan','Pegawai Tidak Tetap(Satpam/Petugas Keamanan)')->count();
        $administrasi = datapegawai::where('jabatan','Pegawai Tidak Tetap(Tenaga Administrasi)')->count();
        $kebersihan = datapegawai::where('jabatan','Pegawai Tidak Tetap(Petugas Kebersihan)')->count();
        $instruktur = datapegawai::where('jabatan','Pegawai tidak tetap (Instruktur)')->count();
        return view('Dashboard.index',compact('labels', 'values','sppd','pegawai','madya','muda','pertama','asn','pelaksana','honorer','tidak_tetap','satpam','administrasi','kebersihan','instruktur','pelaksana_guru'));
    }


}
