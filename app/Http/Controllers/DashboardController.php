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
        // Grafik untuk Sppd 
        $data = sppd::select(DB::raw("DATE_FORMAT(created_at, '%m-%Y') as month"), DB::raw('count(*) as total'))
            ->groupBy('month')
            ->get();

        // Persiapkan data untuk chart
        $chartData = [];
        foreach ($data as $item) {
            $chartData[$item->month] = $item->total;
        }

        // Grafik untuk guru
        $GrafikMadya = datapegawai::where('jabatan', 'Guru Madya')->count();
        $GrafikMuda = datapegawai::where('jabatan', 'Guru Muda')->count();
        $GrafikPertama = datapegawai::where('jabatan', 'Guru Pertama')->count();
        $GrafikPelaksana_guru = datapegawai::where('jabatan', 'Pelaksana Guru')->count();
        $GrafikAsn = datapegawai::where('jabatan', 'ASN PPPK GURU')->count();
        $GrafikPelaksana = datapegawai::where('jabatan', 'Pelaksana')->count();
        $GrafikHonorer = datapegawai::where('jabatan', 'Guru Honorer Provinsi')->count();
        $GrafikTidak_tetap = datapegawai::where('jabatan', 'Guru Tidak Tetap')->count();
        $GrafikSatpam = datapegawai::where('jabatan', 'Pegawai Tidak Tetap(Satpam/Petugas Keamanan)')->count();
        $GrafikAdministrasi = datapegawai::where('jabatan', 'Pegawai Tidak Tetap(Tenaga Administrasi)')->count();
        $GrafikKebersihan = datapegawai::where('jabatan', 'Pegawai Tidak Tetap(Petugas Kebersihan)')->count();
        $GrafikInstruktur = datapegawai::where('jabatan', 'Pegawai tidak tetap (Instruktur)')->count();

        // Menggabungkan jumlah data dari tiga tabel
        $dataGrafikPegawai = [$GrafikMadya, $GrafikMuda, $GrafikPertama,$GrafikPelaksana_guru,$GrafikAsn,$GrafikPelaksana,$GrafikHonorer,$GrafikTidak_tetap,$GrafikSatpam,$GrafikAdministrasi,$GrafikKebersihan,$GrafikInstruktur];

        // Label yang sesuai dengan setiap data
        $labels = ['Guru Madya','Guru Muda','Guru Pertama','Pelaksana Guru','ASN PPPK GURU','Pelaksana','Guru Honorer Provinsi','Guru Tidak Tetap','Pegawai Tidak Tetap(Satpam/Petugas Keamanan)','Pegawai Tidak Tetap(Tenaga Administrasi)','Pegawai Tidak Tetap(Petugas Kebersihan)','Pegawai tidak tetap (Instruktur)'];

        // Warna latar belakang untuk setiap bagian Donut
        $backgroundColor = ['red', 'blue', 'green','orange','yellow','brown','purple','light blue','pink','gray','light yellow','light green'];

        // Untuk menghitung jumlah data dengan melakukan kondisi
        $sppd = sppd::count();
        $pegawai = datapegawai::count();
        $madya = datapegawai::where('jabatan', 'Guru Madya')->count();
        $muda = datapegawai::where('jabatan', 'Guru Muda')->count();
        $pertama = datapegawai::where('jabatan', 'Guru Pertama')->count();
        $pelaksana_guru = datapegawai::where('jabatan', 'Pelaksana Guru')->count();
        $asn = datapegawai::where('jabatan', 'ASN PPPK GURU')->count();
        $pelaksana = datapegawai::where('jabatan', 'Pelaksana')->count();
        $honorer = datapegawai::where('jabatan', 'Guru Honorer Provinsi')->count();
        $tidak_tetap = datapegawai::where('jabatan', 'Guru Tidak Tetap')->count();
        $satpam = datapegawai::where('jabatan', 'Pegawai Tidak Tetap(Satpam/Petugas Keamanan)')->count();
        $administrasi = datapegawai::where('jabatan', 'Pegawai Tidak Tetap(Tenaga Administrasi)')->count();
        $kebersihan = datapegawai::where('jabatan', 'Pegawai Tidak Tetap(Petugas Kebersihan)')->count();
        $instruktur = datapegawai::where('jabatan', 'Pegawai tidak tetap (Instruktur)')->count();

        //Menampilkan halaman 
        return view('Dashboard.index', compact('chartData', 'sppd', 'pegawai', 'madya', 'muda', 'pertama', 'asn', 'pelaksana', 'honorer', 'tidak_tetap', 'satpam', 'administrasi', 'kebersihan', 'instruktur', 'pelaksana_guru','dataGrafikPegawai','labels','backgroundColor'));
    }
}
