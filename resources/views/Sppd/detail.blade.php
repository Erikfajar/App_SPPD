<div class="modal fade" id="modal-xl{{ $item->id }}">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">SPPD : {{ $item->datapegawai->nama }}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
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
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>