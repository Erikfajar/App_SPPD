
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPPD</title>
    <!-- bootstrap css -->
    <style>
        /* reset css */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            width: 100%;
            height: 100vh;
        }

        .row {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .col-md-6 {
            width: 50%;
            height: 100%;
            padding: 20px;
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); */
        }

        .text-center {
            text-align: center;
        }

        .cop {
            text-align: center;
            padding: auto;
        }

        /* create image on left */
        .image-cop {
            width: 100px;
            height: 100px;
            position: relative;
            float: left;
        }

        .line-cop {
            width: 100%;
            height: 4px;
            background-color: black;
        }

        .table-hal {
            padding-top: 10px;
            /* display: flex; */
            margin-left: 70%;
        }

        .table-satu {
            width: 100%;
            height: 100%;
            border: 1px solid black;
            border-collapse: collapse;
        }

        .table-satu td {
            width: 100%;
            height: 100%;
            border: 1px solid black;
            padding: 5px;
        }

        .table-ttd {
            width: 40%;
            border-collapse: collapse;
            display: flex;
            margin-left: 55%;
        }

        .table-dua {
            width: 100%;
            height: 80%;
            border: 1px solid black;
            border-collapse: collapse;
            margin-top: 5%;
        }

        .table-dua td {
            border-top: 1px solid black;
            padding: 1px;
            text-align: start;
            vertical-align: top;
        }

        .table-dua td:first-child {
            border-left: 1px solid black;
        }

        .table-dua td:last-child {
            border-left: 1px solid black;
        }

        .table-dua .iner-table {
            border-collapse: collapse;
        }

        .table-dua .iner-table td {
            border: 0px;
        }

        .list {
            list-style: lower-alpha;
            padding-left: 4%;
        }

        /* create p-1.. p6 */
        .pt-1 {
            padding-top: 10px;
        }

        .pt-2 {
            padding-top: 20px;
        }

        .pt-3 {
            padding-top: 30px;
        }

        .pt-4 {
            padding-top: 40px;
        }

        .pt-5 {
            padding-top: 50px;
        }

        .pt-6 {
            padding-top: 60px;
        }

        /* create h1 - h6 */
        h1 {
            font-size: 30px;
            font-weight: bold;
        }

        h2 {
            font-size: 20px;
            font-weight: bold;
        }

        h3 {
            font-size: 15px;
            font-weight: bold;
        }

        h4 {
            font-size: 10px;
            font-weight: bold;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- create two coll -->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- bagian cop -->
                <div class="cop">
                    <!-- logo src -->
                    <img class="image-cop" src="logo.png" alt="">
                    <h3 class="pt-1">PEMERINTAHAN DAERAH PROVINSI JAWA BARAT</h3>
                    <h3 class="">DINAS PENDIDIKAN</h3>
                    <h3>CABANG DINAS PENDIDIKAN WILAYAH IV</h3>
                    <h3>SEKOLAH MENENGAH KEJURUAN NEGERI 2 SUBANG</h3>
                    <p>Jalan Kapten Piere Tendean Km.05 Dangdeur Subang Telp.(02600 412565
                        Fax. (0260) 416468 Email : info@smkn-2sbg.sch.id website : www.smkn-2sbg.sch.id
                        Kabupaten Subang - 41212
                    </p>
                </div>
                <hr class="line-cop">
                <!-- akhir bagian cop -->

                <!-- conten secction -->
                <div>
                    <table class="table-hal">
                        <tr>
                            <td>Lembar Ke</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Kode No</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Nomor</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <h2 class="text-center pt-1">SURAT PERJALANAN DINAS (SPPD)</h2>
                <div>
                    <table class="table-satu">
                        <tr>
                            <td style="width: 3%;">1</td>
                            <td style="width: 55%;">Penggunaan anggaran/ Kuasa Pengguna Anggaran</td>
                            <td>Kepala Sekolah</td>
                        </tr>
                        <tr>
                            <td style="width: 3%;">2</td>
                            <td style="width: 55%;">Nama / Nip pegawai yang melaksanakan Perjalanan Dinas </td>
                            <td>Kepala Sekolah</td>
                        </tr>
                        <tr>
                            <td style="width: 3%;">3</td>
                            <td style="width: 55%;">
                                <!-- create list -->
                                <ol class="list">
                                    <li>Pangkat dan Golongan</li>
                                    <li>Jabatan</li>
                                    <li>Tingkat Biaya Perjalanan Dinas</li>
                                    <ol>
                            </td>
                            <td>Kepala Sekolah</td>
                        </tr>
                        <tr>
                            <td style="width: 3%;">4</td>
                            <td style="width: 55%;">Maksud Perjalanan Dinas </td>
                            <td>Kepala Sekolah</td>
                        </tr>
                        <tr>
                            <td style="width: 3%;">5</td>
                            <td style="width: 55%;">Alat angkutan yang dipergunakan</td>
                            <td>Kepala Sekolah</td>
                        </tr>
                        <tr>
                            <td style="width: 3%;">6</td>
                            <td style="width: 55%;">
                                <!-- create list -->
                                <ol class="list">
                                    <li>Tempat Berangkat</li>
                                    <li>Tempat Tujuan</li>
                                    <ol>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 3%;">7</td>
                            <td style="width: 55%;">
                                <!-- create list -->
                                <ol class="list">
                                    <li>Lama berangkat</li>
                                    <li>Tanggal Berangkat</li>
                                    <li>Tanggal Harus Kembali</li>
                                    <ol>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 3%;">8</td>
                            <td style="width: 55%;">Pengikut</td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 3%;">9</td>
                            <td style="width: 55%;">Pembebanan Anggaran</td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 3%;">10</td>
                            <td style="width: 55%;">Keterangan lain-lain</td>
                            <td>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="pt-2">
                    <p style="float: left;">*)Coret yang Tidak Perlu</p>
                    <table class="table-ttd">
                        <tr>
                            <td width="30%">Dikeluarkan di</td>
                            <td>:</td>
                            <td>Subang</td>
                        </tr>
                        <tr style="border-bottom: 1px black solid;">
                            <td>Pada Tanggal</td>
                            <td>:</td>
                            <td>Subang</td>
                        </tr>
                        <tr>
                            <td colspan="2">Pengguna Anggaran/ Kuasa Pengguna Anggaran</td>
                        </tr>
                        <tr height="100px">

                        </tr>
                        <tr class="pt-5">
                            <td colspan="2">Nama Pejabat</td>
                        </tr>
                        <tr>
                            <td colspan="2">NIP</td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Bagian Tabel Dua -->
            <div class="col-md-6">
                <table class="table-dua">
                    <tr height="15%">
                        <td colspan="2"></td>
                        <td>
                            <table class="iner-table">
                                <tr>
                                    <td width="30%">Berangkat Dari</td>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Ke</td>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Pada Tanggal</td>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="15%">
                        <td width="5%">I</td>
                        <!-- iner table tiba di -->
                        <td width="40%">
                            <table class="iner-table">
                                <tr>
                                    <td width="30%">Tiba di</td>
                                    <td>:</td>
                                    <td> isi</td>
                                </tr>
                                <tr>
                                    <td>Pada Tanggal</td>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Kepala</td>
                                    <td>:</td>
                                    <td>.......................</td>
                                </tr>
                            </table>
                        </td>
                        <!-- iner table berangkat dari -->
                        <td>
                            <table class="iner-table">
                                <tr>
                                    <td width="30%">Berangkat Dari</td>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Ke</td>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Pada Tanggal</td>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="15%">
                        <td>II</td>
                        <!-- iner table tiba di -->
                        <td width="40%">
                            <table class="iner-table">
                                <tr>
                                    <td width="30%">Tiba di</td>
                                    <td>:</td>
                                    <td> isi</td>
                                </tr>
                                <tr>
                                    <td>Pada Tanggal</td>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Kepala</td>
                                    <td>:</td>
                                    <td>.......................</td>
                                </tr>
                            </table>
                        </td>
                        <!-- iner table berangkat dari -->
                        <td>
                            <table class="iner-table">
                                <tr>
                                    <td width="30%">Berangkat Dari</td>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Ke</td>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Pada Tanggal</td>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="15%">
                        <td>III</td>
                        <!-- iner table tiba di -->
                        <td width="40%">
                            <table class="iner-table">
                                <tr>
                                    <td width="30%">Tiba di</td>
                                    <td>:</td>
                                    <td> isi</td>
                                </tr>
                                <tr>
                                    <td>Pada Tanggal</td>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                            </table>
                        </td>
                        <!-- iner table berangkat dari -->
                        <td>
                            <table class="iner-table">
                                <tr>
                                    <td width="30%">Berangkat Dari</td>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Ke</td>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Pada Tanggal</td>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="30%">
                        <td>IV</td>
                        <td style="border-right: 0px; border-left: 0px;" colspan="2">
                            <table class="iner-table">
                                <tr>
                                    <td width="20%">Tiba Kembali Di</td>
                                    <td>:</td>
                                    <td>Subang</td>
                                </tr>
                                <tr>
                                    <td>Pada Tanggal</td>
                                    <td>:</td>
                                    <td>12-2-2222</td>
                                </tr>
                            </table>
                            <p>
                                Telah diperiksa dengan keterangan bahwa perjalanan tersebut atas perintahnya
                                dan
                                semata-mata untuk kepentingan jabatan dalam waktu sesingkat-singkatnya
                                Pengguna Anggaran/ Kuasa Pengguna Anggaran
                            </p>
                            <center>
                                <table class="iner-table">
                                    <tr>
                                        <td colspan="2">Pengguna Anggaran/ Kuasa Pengguna Anggaran</td>
                                    </tr>
                                    <tr height="100px">

                                    </tr>
                                    <tr class="pt-5">
                                        <td colspan="2">Nama Pejabat</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">NIP</td>
                                    </tr>
                                </table>
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <td>V</td>
                        <td style="border-right: 0px; border-left: 0px;" colspan="3">
                            <p>PERHATIAN</p>
                            <p>
                                PA/KPA yang telah menerbitkan SPD, pegawai yang melakukan perjalanan dinas, para pejabat
                                yang mengesahkan tanggal berangkat/tiba, serta bendahara pengeluaran bertanggung jawab
                                berdasarkan peraturan-peraturan Keuangan Negara apabila Negara menderita rugi akibat
                                kesalahan, kelalaian dan kealpaannya.
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <script>
            window.print()
        </script>
</body>

</html>