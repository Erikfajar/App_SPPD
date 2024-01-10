@extends('Dashboard.main')
@section('isi')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"><b><u>DASHBOARD</u></b></h1>
                    </div><!-- /.col -->
                    <!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    {{-- Card Jumlah Pegawai --}}
                    <div class="col-lg-6 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{ $pegawai }} Pegawai</h3>
                                <p>Total Pegawai SMKN 2 Subang </p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-users fa-2xl" style="margin-top:0.5em"></i>
                            </div>
                            <a href="{{ route('pegawai.index') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6">
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{ $sppd }} SPPD</h3>
                                <p>SPPD yang telah di buat</p>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-file-lines fa-2xl" style="margin-top: 0.5em"></i>
                            </div>
                            <a href="{{ route('sppd.index') }}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box shadow">
                            <span class="info-box-icon bg-light"><i class="fa-regular fa-user fa-lg"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Guru Madya</span>
                                <span class="info-box-number">{{ $madya }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box shadow">
                            <span class="info-box-icon" style="background-color: #F94C10; color: white"><i
                                    class="fa-regular fa-user fa-lg"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Guru Muda</span>
                                <span class="info-box-number">{{ $muda }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box shadow">
                            <span class="info-box-icon" style="background-color: #337CCF"><i
                                    class="fa-regular fa-user fa-lg"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Guru Pertama</span>
                                <span class="info-box-number">{{ $pertama }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box shadow">
                            <span class="info-box-icon" style="background-color: brown; color:white"><i
                                    class="fa-regular fa-user fa-lg"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Pelaksana Guru</span>
                                <span class="info-box-number">{{ $pelaksana_guru }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box shadow">
                            <span class="info-box-icon" style="background-color: purple; color:white"><i
                                    class="fa-regular fa-user fa-lg"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">ASN PPPK GURU
                                </span>
                                <span class="info-box-number">{{ $asn }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box shadow">
                            <span class="info-box-icon bg-warning"><i class="fa-regular fa-user fa-lg"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Pelaksana
                                </span>
                                <span class="info-box-number">{{ $pelaksana }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box shadow">
                            <span class="info-box-icon bg-dark"><i class="fa-regular fa-user fa-lg"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Guru Honorer Provinsi
                                </span>
                                <span class="info-box-number">{{ $honorer }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box shadow">
                            <span class="info-box-icon bg-danger"><i class="fa-regular fa-user fa-lg"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Guru Tidak Tetap
                                </span>
                                <span class="info-box-number">{{ $tidak_tetap }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box shadow">
                            <span class="info-box-icon bg-secondary"><i class="fa-regular fa-user fa-lg"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Satpam/Petugas
                                    Keamanan
                                </span>
                                <span class="info-box-number">{{ $satpam }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box shadow">
                            <span class="info-box-icon bg-success"><i class="fa-regular fa-user fa-lg"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Tenaga
                                    Administrasi
                                </span>
                                <span class="info-box-number">{{ $administrasi }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box shadow">
                            <span class="info-box-icon bg-primary"><i class="fa-regular fa-user fa-lg"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Petugas Kebersihan
                                </span>
                                <span class="info-box-number">{{ $kebersihan }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box shadow">
                            <span class="info-box-icon bg-info"><i class="fa-regular fa-user fa-lg"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Instruktur
                                </span>
                                <span class="info-box-number">{{ $instruktur }}</span>
                            </div>
                        </div>
                    </div>


                    {{-- Tampilan Charts --}}
                    <div class="col-md-12">
                        <!-- AREA CHART -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Grafik Yang masuk SPPD Per-Bulan</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body collapse">
                                <div class="chart">
                                    <canvas id="myChart"
                                        style="min-height: 500px; height: 500px; max-height: 500px; max-width: 100%;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Area chart pegawai --}}
                    <div class="col-md-12">
                        <!-- AREA CHART -->
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Grafik Jumlah Pegawai SMK Negeri 2 Subang</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body collapse">
                                <div class="chart">
                                    <canvas id="grafikPegawai"
                                        style="min-height: 500px; height: 500px; max-height: 500px; max-width: 100%;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    @include('Dashboard.script-chart')
@endsection
