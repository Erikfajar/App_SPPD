@extends('Dashboard.main')
@section('isi')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="m-0"><b>BUAT SPPD & HISTORY SPPD</b></h3>
          <button type="button" class="btn btn-outline-primary btn-lg mt-3" data-toggle="modal" data-target="#modal-default">
            Buat SPPD
          </button>
        </div><!-- /.col -->
        <!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  @include('komponen.alert')
  {{-- <section class="content">
    <div class="container-fluid">
      <div class="row"> --}}
        {{-- <div class="col-12">
          @foreach ($data as $item)
          <div class="card">
            <div class="card-header">
              <h3>Terakhir SPPD dibuat pada : <b>{{ $item->tgl_dibuat }}</b></h3>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-hover table-bordered">

                <thead>
                  <tr>
                    <th class="tg-c3ow">1</th>
                    <th class="tg-0pky">Pengguna anggaran/Kuasa Pengguna Anggaran</th>
                    <th class="tg-0pky" colspan="2">{{ $item->pengguna_anggaran }}</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="tg-0pky">2</td>
                    <td class="tg-0pky">
                      Nama/Nip pegawai yang melaksanakan perjalanan dinas
                    </td>
                    <td class="tg-0pky" colspan="2">{{ $item->datapegawai->nip}} {{ $item->datapegawai->nama }}</td>
                  </tr>
                  <tr>
                    <td class="tg-0pky">3</td>
                    <td class="tg-0pky">
                      a.Pangkat dan golongan<br />b.Jabatan<br />c.Tingkat biaya
                      perjalanan dinas
                    </td>
                    <td class="tg-0pky" colspan="2">
                      a. {{ $item->datapegawai->pangkat }}<br />b. {{ $item->datapegawai->jabatan }}<br />c. {{
                      $item->biaya_perjalanan }}
                    </td>
                  </tr>
                  <tr>
                    <td class="tg-0pky">4</td>
                    <td class="tg-0pky">maksud perjalanan dinas</td>
                    <td class="tg-0pky" colspan="2">{{ $item->maksud_perjalanan }}</td>
                  </tr>
                  <tr>
                    <td class="tg-0pky">5</td>
                    <td class="tg-0pky">alat angkutan yang digunakan</td>
                    <td class="tg-0pky" colspan="2">{{ $item->alat_angkutan }}</td>
                  </tr>
                  <tr>
                    <td class="tg-0pky">6</td>
                    <td class="tg-0pky">a. Tempat berangkat<br />b. Tempat Tujuan</td>
                    <td class="tg-0pky" colspan="2">a. {{ $item->tempat_berangkat }}<br />b. {{ $item->tempat_tujuan}}
                    </td>
                  </tr>
                  <tr>
                    <td class="tg-0pky">7</td>
                    <td class="tg-0pky">
                      a. Lama Berangkat<br />b.Tanggal berangkat<br />c. Tanggal harus
                      kembali
                    </td>
                    <td class="tg-0pky" colspan="2">a. {{ $item->lama_berangkat }}<br />b. {{
                      $item->tgl_berangkat_indo}}<br />c. {{ $item->tgl_kembali_indo}}</td>
                  </tr>
                  <tr>
                    <td class="tg-0pky">d</td>
                    <td class="tg-0pky">pengikut: nama</td>
                    <td class="tg-0pky">Tanggal lahir</td>
                    <td class="tg-0pky">keterangan</td>
                  </tr>
                  <tr>
                    <td class="tg-0pky">e</td>
                    <td class="tg-0pky">1. {{ $item->namapengikut1 }}<br />2.{{ $item->namapengikut2 }}</td>
                    <td class="tg-0pky">1.{{ $item->tgl_lhr1_indo }}<br />2,{{ $item->tgl_lhr2_indo }}</td>
                    <td class="tg-0pky">1. {{ $item->ketpengikut1 }}<br />2. {{ $item->ketpengikut2 }}</td>
                  </tr>
                  <tr>
                    <td class="tg-0pky">f</td>
                    <td class="tg-0pky">
                      Pembebanan Anggaran<br />1. Instansi<br />2. Akun
                    </td>
                    <td class="tg-0pky" colspan="2"><br />1. {{ $item->instansi }}<br />2. {{ $item->akun }}</td>
                  </tr>
                  <tr>
                    <td class="tg-0pky">g</td>
                    <td class="tg-0pky">keterangan lain-lain</td>
                    <td class="tg-0pky" colspan="2">{{ $item->ket }}</td>
                  </tr>
                </tbody>

              </table>
              <a href="{{ route('print-sppd', $item->id) }}" target="_blank" class="btn btn-danger mt-3">Print</a>
              <button type="button" class="btn btn-primary mt-3" data-toggle="modal"
                data-target="#modal-default{{ $item->id }}">
                <i class="fa-solid fa-file-pen"></i> Edit
              </button>
              @include('Sppd.edit')
            </div>
            <!-- /.card-body -->
          </div>
          @endforeach



        </div> --}}

        
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">

                    <span><b>Riwayat Pembuatan SPPD</b></span>

                  
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table class="table table-striped table-bordered table-hover">
                        <thead>
                          <tr>
                            <th style="width: 10px">No</th>
                            <th>Pengguna Anggaran</th>
                            <th>Pegawai Yang Terlibat</th>
                            <th>Maksud Perjalanan</th>
                            <th>Tgl Berangkat</th>
                          
                            <th>Instansi</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        
                        <tbody>
                          @foreach ($dataAll as $item)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->pengguna_anggaran }}</td>
                            <td>{{ $item->datapegawai->nip }} {{ $item->datapegawai->nama }}</td>
                            <td>{{ $item->maksud_perjalanan }}</td>
                            <td>{{ $item->tgl_berangkat_indo }}</td>

                            <td>{{ $item->instansi }}</td>
                            <td>

                              <a href="{{ route('pdf-sppd', $item->id) }}" target="_blank" class="btn btn-sm btn-danger"><i class="fa-solid fa-file-pdf"></i></a>
                              <form method="POST" action="{{ route('sppd.destroy', $item->id) }}" class="d-inline">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-warning delete-btn" type="button">
                                    <i class="fas fa-trash">
                                    </i>
                                </button>
                              </form>
                              <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-xl{{ $item->id }}">
                                <i class="fa-solid fa-file-circle-exclamation"></i>
                              </button>
                              @include('Sppd.detail')
                              <button type="button" class="btn btn-sm btn-light" data-toggle="modal"
                              data-target="#modal-default{{ $item->id }}">
                              <i class="fa-solid fa-file-pen"></i> 
                            </button>
                            
                          </td>
                         
                        </tr>
                          @include('Sppd.edit')
                          @endforeach
                        </tbody>
                       
                      </table>
                      {{ $dataAll->links('pagination::bootstrap-4') }}
                    </div>
                    <!-- /.card-body -->
                  </div>
                </div>
              </div>
            </div>
        </section>

        @include('Sppd.create')
        @endsection