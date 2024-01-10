@extends('Dashboard.main') @section('isi')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3 class="m-0"><b>DATA PEGAWAI SMKN 2 SUBANG</b></h3>
                    </div>
                    <!-- /.col -->
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        @include('komponen.alert')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#modal-default">
                                    + Pegawai
                                </button>
                                <a href="{{ route('print-pegawai') }}" target="_blank" class="btn btn-danger">Print All</a>
                                {{-- <a href="" class="btn btn-warning" target="_blank">Print Per-Jabatan</a>
                            <a href="" class="btn btn-secondary" target="_blank">Print Per-Pangkat</a> --}}
                                {{-- <a href="{{ route('pegawai.index') }}" class="btn btn-success" style="margin-left: 43em; margin-top:1em" style="">Refresh</a> --}}
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="margin-right:1em; margin-top:1em">
                                        <form id="live-search" action="" method="GET">
                                            <input type="text" name="search" id="search"
                                                class="form-control float-right" placeholder="Search">
                                        </form>
                                        {{-- <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                      <i class="fas fa-search"></i>
                                    </button>
                                  </div> --}}
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center">No</th>
                                                <th style="text-align: center">Nip/Nama</th>
                                                <th style="text-align: center">Pangkat</th>
                                                <th style="text-align: center">Jabatan</th>
                                                <th style="text-align: center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td style="text-align: center">
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td style="text-align: center">
                                                        {{ $item->nip }} | {{ $item->nama }}
                                                    </td>
                                                    <td style="text-align: center">{{ $item->pangkat }}</td>
                                                    <td style="text-align: center">{{ $item->jabatan }}</td>
                                                    <td class="project-actions text-center">

                                                        <button type="button" class="btn btn-sm btn-info"
                                                            data-toggle="modal"
                                                            data-target="#modal-info{{ $item->id }}">
                                                            <i class="fas fa-pencil-alt">
                                                            </i> Edit
                                                        </button>
                                                        <form method="POST"
                                                            action="{{ route('pegawai.destroy', $item->id) }}"
                                                            class="d-inline">
                                                            @csrf @method('DELETE')
                                                            <button class="btn btn-sm btn-danger delete-btn" type="button">
                                                                <i class="fas fa-trash">
                                                                </i> Delete
                                                            </button>
                                                        </form>

                                                        @include('Pegawai.edit')
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>


                                    </table>
                                    {{ $data->links('pagination::bootstrap-4') }}
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>

                        @include('Pegawai.create')
                    @endsection
                </div>
            </div>
    </section>
</div>
