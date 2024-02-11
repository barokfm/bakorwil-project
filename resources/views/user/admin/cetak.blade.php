<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Name: {{ $peminjam->nama_peminjam }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid p-1">
        <div class="container-fluid pt-3 d-flex justify-content-around align-items-center">
            <img src="/img/kop.png" alt="kop" width="100">
            <div class="container grid text-center">
                <h5 class="" style="line-height: 1">PEMERINTAH PROVINSI JAWA TIMUR</h5>
                <h5 class="" style="line-height: .5"><b>BADAN KOORDINASI WILAYAH PEMERINTAHAN DAN</b></h5>
                <h5 class="" style="line-height: 1"><b>PEMBANGUNAN PAMEKASAN</b></h5>
                <div class="" style="line-height: 0">
                    <small class="">Alamat: Jalan Slamet Riyadi No. 1 Pamekasan</small>
                    <br>
                    <small class="" style="line-height: 2">Email: bakorwil4@jatimprov.go.id</small>
                </div>
                <h5 class="" style="line-height: .5"><b>PAMEKASAN</b></h5>
                <div position-relative pb-3">
                    <small class=" col-7 position-absolute"><b>Kode Pos 69313</b></small>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <hr class="border-top border-dark" style="height: 5px">
        </div>
        <div class="text-center">
            <h5><b><u>PERINCIAN PESEWAAN</u></b></h5>
        </div>
        <div class="container-fluid pt-2">
            <div class="container-fluid overflow-hidden">
                <div class="container d-flex justify-content-between">
                    <div>
                        <tr><b>Nama &emsp;&emsp;: </b></tr>
                        <td>{{ $peminjam->nama_peminjam }}</td><br>
                        <tr><b>Alamat &emsp;&ensp;: </b></tr>
                        <td>{{ $peminjam->alamat }}</td><br>
                        <tr><b>No. Hp &ensp;&emsp;: </b></tr>
                        <td>{{ $peminjam->no_hp }}</td><br>
                        <tr><b>No. KTP &emsp;: </b></tr>
                        <td>{{ $peminjam->no_ktp }}</td><br>
                    </div>
                    <div>
                        <tr><b>Keperluan &emsp;&ensp;: </b></tr>
                        <td>{{ $peminjam->agenda }}</td> <br>
                        <tr><b>Tgl. Dipakai &ensp;&nbsp;: </b></tr>
                        <td>{{ $peminjam->tgl_awal }}</td><br>
                        <tr><b>Pukul &emsp;&emsp;&emsp;&ensp;: </b></tr>
                        <td>{{ $peminjam->waktu }}</td><br>
                        <tr><b>Email &emsp;&emsp;&emsp;&ensp;: </b></tr>
                        <td>{{ $peminjam->email }}</td><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-3">
            <table class="table border">
                <thead>
                    <tr>
                        <th scope="col">NO.</th>
                        <th scope="col">URAIAN PERALATAN</th>
                        <th scope="col">SATUAN PESANAN</th>
                        <th scope="col">TARIF SEWA</th>
                        <th scope="col">JUMLAH</th>
                        <th scope="col">KET.</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <th>Gedung Pertemuan</th>
                        <th>5 Jam</th>
                        <th>Rp. 3.000.000</th>
                        <th>Rp. 3.000.000</th>
                        <th>.......</th>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
