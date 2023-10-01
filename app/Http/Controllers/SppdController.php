<?php

namespace App\Http\Controllers;

use App\Models\sppd;
use App\Models\datapegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SppdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = datapegawai::all();
     
        $data = sppd::with('datapegawai')->latest()->paginate(1);
        $dataAll = sppd::with('datapegawai')->latest()->paginate(5);
        return view('Sppd.index',compact('data','pegawai','dataAll'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('Pengguna_anggaran', $request->pengguna_anggaran);
        Session::flash('datapegawai_id', $request->datapegawai_id);
        Session::flash('biaya_perjalanan', $request->biaya_perjalanan);
        Session::flash('maksud_perjalanan', $request->maksud_perjalanan);
        Session::flash('tempat_berangkat', $request->tempat_berangkat);
        Session::flash('tempat_tujuan', $request->tempat_tujuan);
        Session::flash('lama_berangkat', $request->lama_berangkat);
        Session::flash('tgl_berangkat', $request->tgl_berangkat);
        Session::flash('tgl_kembali', $request->tgl_kembali);
        Session::flash('tgl_kembali', $request->tgl_kembali);
        // Session::flash('namapengikut1', $request->namapengikut1);
        // Session::flash('namapengikut2', $request->namapengikut2);
        // Session::flash('tgllhr1', $request->tgllhr1);
        // Session::flash('tgllhr2', $request->tgllhr2);
        // Session::flash('ketpengikut1', $request->ketpengikut1);
        // Session::flash('ketpengikut2', $request->ketpengikut2);
        Session::flash('instansi', $request->instansi);
        Session::flash('akun', $request->akun);
        Session::flash('ket', $request->ket);

        $request->validate(
            [
                'pengguna_anggaran' => 'required',
                'datapegawai_id' => 'required',
                'biaya_perjalanan' => 'required',
                'maksud_perjalanan' => 'required',
                'tempat_berangkat' => 'required',
                'tempat_tujuan' => 'required',
                'lama_berangkat' => 'required',
                'tgl_berangkat' => 'required',
                'tgl_kembali' => 'required',
                'tgl_kembali' => 'required',
                // 'namapengikut1' => 'required',
                // 'namapengikut2' => 'required',
                // 'tgllhr1' => 'required',
                // 'tgllhr2' => 'required',
                // 'ketpengikut1' => 'required',
                // 'ketpengikut2' => 'required',
                'instansi' => 'required',
                'akun' => 'required',
                'ket' => 'required',

            ],
            [
                'pengguna_anggaran.required' => 'Pengguna Anggaran wajib di isi',
                'datapegawai_id.required' => 'datapegawai wajib di isi',
                'biaya_perjalanan.required' => 'Biaya Perjalanan wajib di isi',
                'maksud_perjalanan.required' => 'Maksud Perjalanan dinas wajib di isi',
                'alat_angkutan.required' => 'Alat angkut yang digunakan wajib di isi',
                'tempat_berangkat.required' => 'Tempat berangkat wajib di isi',
                'tempat_tujuan.required' => 'Tempat Tujuan wajib di isi',
                'lama_berangkat.required' => 'Lama Berangkat wajib di isi',
                'tgl_berangkat.required' => 'Tanggal Berangkat wajib di isi',
                'tgl_kembali.required' => 'Tanggal Kembali wajib di isi',
                'instansi.required' => 'instansi wajib di isi',
                'akun.required' => 'Akun wajib di isi',
                'ket.required' => 'Keterangan wajib di isi',

            ]
        );
        $sppd = [
            'pengguna_anggaran' => $request->pengguna_anggaran,
            'datapegawai_id' => $request->datapegawai_id,
            'biaya_perjalanan' => $request->biaya_perjalanan,
            'maksud_perjalanan' => $request->maksud_perjalanan,
            'alat_angkutan' => $request->alat_angkutan,
            'tempat_berangkat' => $request->tempat_berangkat,
            'tempat_tujuan' => $request->tempat_tujuan,
            'lama_berangkat' => $request->lama_berangkat,
            'tgl_berangkat' => $request->tgl_berangkat,
            'tgl_kembali' => $request->tgl_kembali,
            'namapengikut1' => $request->namapengikut1,
            'tgllhr1' => $request->tgllhr1,
            'ketpengikut1' => $request->ketpengikut1,
            'namapengikut2' => $request->namapengikut2,
            'tgllhr2' => $request->tgllhr2,
            'ketpengikut2' => $request->ketpengikut2,
            'instansi' => $request->instansi,
            'akun' => $request->akun,
            'ket' => $request->ket,
        ];

        sppd::create($sppd);
        return redirect()->route('sppd.index')->with('success', 'SPPD berhasil di buat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data = sppd::findorfail($id);
        // return view('sppd.index',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Session::flash('Pengguna_anggaran', $request->Pengguna_anggaran);
        Session::flash('datapegawai_id', $request->datapegawai_id);
        Session::flash('biaya_perjalanan', $request->biaya_perjalanan);
        Session::flash('maksud_perjalanan', $request->maksud_perjalanan);
        Session::flash('tempat_berangkat', $request->tempat_berangkat);
        Session::flash('tempat_tujuan', $request->tempat_tujuan);
        Session::flash('lama_berangkat', $request->lama_berangkat);
        Session::flash('tgl_berangkat', $request->tgl_berangkat);
        Session::flash('tgl_kembali', $request->tgl_kembali);
        // Session::flash('tgl_kembali', $request->tgl_kembali);
        // Session::flash('namapengikut1', $request->namapengikut1);
        // Session::flash('namapengikut2', $request->namapengikut2);
        // Session::flash('tgllhr1', $request->tgllhr1);
        // Session::flash('tgllhr2', $request->tgllhr2);
        // Session::flash('ketpengikut1', $request->ketpengikut1);
        // Session::flash('ketpengikut2', $request->ketpengikut2);
        Session::flash('instansi', $request->instansi);
        Session::flash('akun', $request->akun);
        Session::flash('ket', $request->ket);

        $request->validate(
            [
                'pengguna_anggaran' => 'required',
                'datapegawai_id' => 'required',
                'biaya_perjalanan' => 'required',
                'maksud_perjalanan' => 'required',
                'tempat_berangkat' => 'required',
                'tempat_tujuan' => 'required',
                'lama_berangkat' => 'required',
                'tgl_berangkat' => 'required',
                'tgl_kembali' => 'required',
                'tgl_kembali' => 'required',
                // 'namapengikut1' => 'required',
                // 'namapengikut2' => 'required',
                // 'tgllhr1' => 'required',
                // 'tgllhr2' => 'required',
                // 'ketpengikut1' => 'required',
                // 'ketpengikut2' => 'required',
                'instansi' => 'required',
                'akun' => 'required',
                'ket' => 'required',

            ],
            [
                'pengguna_anggaran.required' => 'Pengguna Anggaran wajib di isi',
                'datapegawai_id.required' => 'datapegawai wajib di isi',
                'biaya_perjalanan.required' => 'Biaya Perjalanan wajib di isi',
                'maksud_perjalanan.required' => 'Maksud Perjalanan dinas wajib di isi',
                'alat_angkutan.required' => 'Alat angkut yang digunakan wajib di isi',
                'tempat_berangkat.required' => 'Tempat berangkat wajib di isi',
                'tempat_tujuan.required' => 'Tempat Tujuan wajib di isi',
                'lama_berangkat.required' => 'Lama Berangkat wajib di isi',
                'tgl_berangkat.required' => 'Tanggal Berangkat wajib di isi',
                'tgl_kembali.required' => 'Tanggal Kembali wajib di isi',
                'instansi.required' => 'instansi wajib di isi',
                'akun.required' => 'Akun wajib di isi',
                'ket.required' => 'Keterangan wajib di isi',

            ]
        );
        $sppd = [
            'pengguna_anggaran' => $request->pengguna_anggaran,
            'datapegawai_id' => $request->datapegawai_id,
            'biaya_perjalanan' => $request->biaya_perjalanan,
            'maksud_perjalanan' => $request->maksud_perjalanan,
            'alat_angkutan' => $request->alat_angkutan,
            'tempat_berangkat' => $request->tempat_berangkat,
            'tempat_tujuan' => $request->tempat_tujuan,
            'lama_berangkat' => $request->lama_berangkat,
            'tgl_berangkat' => $request->tgl_berangkat,
            'tgl_kembali' => $request->tgl_kembali,
            'namapengikut1' => $request->namapengikut1,
            'tgllhr1' => $request->tgllhr1,
            'ketpengikut1' => $request->ketpengikut1,
            'namapengikut2' => $request->namapengikut2,
            'tgllhr2' => $request->tgllhr2,
            'ketpengikut2' => $request->ketpengikut2,
            'instansi' => $request->instansi,
            'akun' => $request->akun,
            'ket' => $request->ket,
        ];

        sppd::where('id', $id)->update($sppd);
        return redirect()->route('sppd.index')->with('success', 'SPPD berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawai = sppd::findorfail($id);
        $pegawai->delete();
        return back()->with('success', 'Data Berhasil Dihapus');
    }
}
