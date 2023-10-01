<div class="modal fade" id="modal-info{{ $item->id }}">
  <div class="modal-dialog">
    <div class="modal-content bg-info">
      <div class="modal-header">
        <h4 class="modal-title">Edit Pegawai</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="quickForm" method="POST" action="{{ route('pegawai.update', $item->id) }}">
          @csrf
          @method('PUT')
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">NIP</label>
                <input type="text" value="{{ $item->nip }}" name="nip" class="form-control" id="exampleInputEmail1" placeholder="Nip Pegawai">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">NAMA</label>
                <input type="text" value="{{ $item->nama }}"  name="nama" class="form-control" id="exampleInputPassword1" placeholder="Nama Pegawai">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">PANGKAT</label>
                <input type="text"  name="pangkat" value="{{ $item->pangkat }}" class="form-control" id="exampleInputPassword1" placeholder="Pangkat Pegawai">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">JABATAN</label>
                <input type="text"  name="jabatan" value="{{ $item->jabatan }}" class="form-control" id="exampleInputPassword1" placeholder="Jabatan Pegawai">
              </div>
             
            </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-light">Simpan data</button>
      </div>
    </form>
      
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>