<div class="modal fade" id="modal-default{{ $item->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit data SPPD</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="quickForm" method="POST" action="{{ route('sppd.update',$item->id) }}">
              @csrf
              @method('PUT')
                <div class="card-body">
                  <div class="form-group row">
                    <label>Pengguna Anggaran</label>
                  
                        <input value="{{ $item->pengguna_anggaran }}" type="text" class="form-control" placeholder="Pengguna anggaran" name="pengguna_anggaran">
                   
                </div>
              
                <div class="form-group row">
                  <label>Tingkat Biaya</label>
              
                      <input type="text" class="form-control" placeholder="Pengguna anggaran" value="{{ $item->biaya_perjalanan }}" name="biaya_perjalanan">
                  
                </div>
                <div class="form-group row">
                  <label>Maksud Perjalanan</label>
                
                      <input type="text" value="{{ $item->maksud_perjalanan }}" class="form-control" placeholder="Maksud Perjalanan" name="maksud_perjalanan">
                
                </div>
                <div class="form-group row">
                  <label>Alat Angkutan</label>
                  
                      <input type="text" value="{{ $item->alat_angkutan }}" class="form-control" placeholder="Alat angkut yg digunakan" name="alat_angkutan">
                  </div>
                
                <div class="form-group row">
                  <label>Tempat Berangkat</label>
                  
                      <input type="text" class="form-control" placeholder="Tempat Berangkat" value="{{ $item->tempat_berangkat }}" name="tempat_berangkat">
                  </div>
                
                <div class="form-group row">
                  <label>Tempat Tujuan</label>
                  
                      <input type="text" class="form-control" placeholder="Tempat Tujuan" value="{{ $item->tempat_tujuan }}" name="tempat_tujuan">
                  </div>
                
                <div class="form-group row">
                  <label>lama Berangkat</label>
                  
                      <input type="text" class="form-control" placeholder="lama Berangkat" value="{{ $item->lama_berangkat }}" name="lama_berangkat">
                  </div>
                
                <div class="form-group row">
                  <label>Tanggal Berangkat</label>
                  
                      <input type="date" class="form-control" placeholder="Tanggal Berangkat" value="{{ $item->tgl_berangkat }}" name="tgl_berangkat">
                  </div>
                
                
                <div class="form-group row">
                  <label>Tanggal Kembali</label>
                  
                      <input type="date" class="form-control" placeholder="Tanggal Kembali" value="{{ $item->tgl_kembali }}" name="tgl_kembali">
                  </div>
                
                <div class="form-group row">
                  <label>Nama Pengikut 1</label>
                  
                      <input type="text" class="form-control" placeholder="Nama Pengikut 1" value="{{ $item->namapengikut1 }}" name="namapengikut1">
                  </div>
                
                <div class="form-group row">
                  <label>Nama Pengikut 2</label>
                  
                      <input type="text" class="form-control" placeholder="Nama Pengikut 2" value="{{ $item->namapengikut2 }}" name="namapengikut2">
                  </div>
                
                <div class="form-group row">
                  <label>Tanggal lahir 1</label>
                  
                      <input type="date" class="form-control" placeholder="Tanggal lahir 1" value="{{ $item->tgllhr1 }}" name="tgllhr1">
                  </div>
                
                <div class="form-group row">
                  <label>Tanggal lahir 2</label>
                  
                      <input type="date" class="form-control" placeholder="Tanggal lahir 2" value="{{ $item->tgllhr2 }}" name="tgllhr2">
                  </div>
                
                <div class="form-group row">
                  <label>Ket pengikut 1</label>
                  
                      <input type="text" class="form-control" placeholder="Ket pengikut 1" value="{{ $item->ketpengikut1 }}" name="ketpengikut1">
                  </div>
                
                <div class="form-group row">
                  <label>Ket pengikut 2</label>
                  
                      <input type="text" class="form-control" placeholder="Ket pengikut 2" value="{{ $item->ketpengikut2 }}" name="ketpengikut2">
                  </div>
                
                <div class="form-group row">
                  <label>Instansi</label>
                  
                      <input type="text" class="form-control" placeholder="Instansi" value="{{ $item->instansi }}" name="instansi">
                  </div>
                
                <div class="form-group row">
                  <label>Akun</label>
                  
                      <input type="text" class="form-control" placeholder="Akun" value="{{ $item->akun }}" name="akun">
                  </div>
                
                <div class="form-group row">
                  <label>Keterangan</label>
                  
                      <input type="text" class="form-control" placeholder="Keterangan" value="{{ $item->ket }}" name="ket">
                  </div>
                  <div class="form-group row">
                    <label>Pegawai yang melaksanakan</label>
                   
                      <select class="form-control default-select" id="sel1" name="datapegawai_id">
                        <option disabled value>Pilih Nama/Nip</option>
                        <option  value="{{ $item->id }}">{{ $item->datapegawai->nip }} {{ $item->datapegawai->nama }}</option>
                        @foreach ($pegawai as $item)
                        <option value="{{ $item->id }}">{{ $item->nip }} {{ $item->nama }}</option>
                        @endforeach
    
                    </select>
                   
                </div>    
                 
                </div>
      
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
    </div>
    </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>