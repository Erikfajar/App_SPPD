<?php

namespace App\Http\Controllers;

use App\Models\datapegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->search){
            $data = datapegawai::search($request->search)->paginate(100000);
        } else{

            $data = datapegawai::latest()->paginate(10);
        }
        
        return view('Pegawai.index',compact('data'));
    }

  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('nip', $request->nip);
        Session::flash('nama', $request->nama);
        Session::flash('pangkat', $request->pangkat);
        Session::flash('jabatan', $request->jabatan);

        $request->validate(
            [
                'nip' => 'required',
                'nama' => 'required',
                'pangkat' => 'required',
                'jabatan' => 'required',
            ],
            [
                'nip.required' => 'Nip Pegawai wajib di isi',
                'nama.required' => 'Nama Pegawai wajib di isi',
                'pangkat.required' => 'Pangkat Pegawai wajib di isi',
                'jabatan.required' => 'Jabatan Pegawai wajib di isi',
            ]
            );
            $pegawai = [
                'nip' =>$request ->nip,
                'nama' =>$request ->nama,
                'pangkat' =>$request ->pangkat,
                'jabatan' =>$request ->jabatan,
            ];
            datapegawai::create($pegawai);
            return redirect()->route('pegawai.index')->with('success','Pegawai Berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $pegawai = datapegawai::findorfail($id);
        // return view('Pegawai.edit',compact('pegawai'));
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
        Session::flash('nip', $request->nip);
        Session::flash('nama', $request->nama);
        Session::flash('pangkat', $request->pangkat);
        Session::flash('jabatan', $request->jabatan);

        $request->validate(
            [
                'nip' => 'required',
                'nama' => 'required',
                'pangkat' => 'required',
                'jabatan' => 'required',
            ],
            [
                'nip.required' => 'Nip Pegawai wajib di isi',
                'nama.required' => 'Nama Pegawai wajib di isi',
                'pangkat.required' => 'Pangkat Pegawai wajib di isi',
                'jabatan.required' => 'Jabatan Pegawai wajib di isi',
            ]
            );
            $pegawai = [
                'nip' =>$request ->nip,
                'nama' =>$request ->nama,
                'pangkat' =>$request ->pangkat,
                'jabatan' =>$request ->jabatan,
            ];
            datapegawai::where('id', $id)->update($pegawai);
            return redirect()->route('pegawai.index')->with('success','Pegawai Berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawai = datapegawai::findorfail($id);
        $pegawai->delete();
        return back()->with('success', 'Data Berhasil Dihapus');
    }
}
