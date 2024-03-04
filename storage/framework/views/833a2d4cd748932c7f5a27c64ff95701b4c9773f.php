<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Name: <?php echo e($peminjam->nama_peminjam); ?></title>

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
                        <td><?php echo e($peminjam->nama_peminjam); ?></td><br>
                        <tr><b>Alamat &emsp;&ensp;: </b></tr>
                        <td><?php echo e($peminjam->alamat); ?></td><br>
                        <tr><b>No. Hp &ensp;&emsp;: </b></tr>
                        <td><?php echo e($peminjam->no_hp); ?></td><br>
                        <tr><b>No. KTP &emsp;: </b></tr>
                        <td><?php echo e($peminjam->no_ktp); ?></td><br>
                    </div>
                    <div>
                        <tr><b>Keperluan &emsp;&ensp;: </b></tr>
                        <td><?php echo e($peminjam->agenda); ?></td> <br>
                        <tr><b>Tgl. Dipakai &ensp;&nbsp;: </b></tr>
                        <td><?php echo e($peminjam->tgl_awal); ?></td><br>
                        <tr><b>Pukul &emsp;&emsp;&emsp;&ensp;: </b></tr>
                        <td><?php echo e($peminjam->waktu); ?></td><br>
                        <tr><b>Email &emsp;&emsp;&emsp;&ensp;: </b></tr>
                        <td><?php echo e($peminjam->email); ?></td><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-3">
            <table class="table border table-striped">
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
                        <th class="fw-light"><?php echo e($gedung->nama); ?></th>
                        <th class="fw-light"><?php echo e($peminjam->jam_operasional); ?> Jam</th>
                        <th class="fw-light">Rp.<?php echo e(number_format(3000000, 0, ',', '.')); ?></th>
                        <th class="fw-light"><?php
                            $hargaGedung = $gedung->harga * $peminjam->jam_operasional;
                        ?>
                            Rp.<?php echo e(number_format($hargaGedung, 0, ',', '.')); ?></th>
                        <th class="fw-light">.......</th>
                    </tr>
                    <?php for($i = 0; $i < count($peralatan); $i++): ?>
                        <tr>
                            <th scope="row"><?php echo e($i + 2); ?></th>
                            <th class="fw-light"><?php echo e($peralatan[$i]->nama); ?></th>
                            <th class="fw-light"><?php echo e($peralatan[$i]->jumlah); ?> buah</th>
                            <th class="fw-light">Rp.<?php echo e(number_format($peralatan[$i]->harga, 0, ',', '.')); ?></th>
                            <th class="fw-light"><?php $harga = $peralatan[$i]->harga * $peralatan[$i]->jumlah; ?>
                                Rp.<?php echo e(number_format($harga, 0, ',', '.')); ?></th>
                            <th class="fw-light">.......</th>
                        </tr>
                    <?php endfor; ?>
                    <?php for($i = 0; $i < count($perlengkapan); $i++): ?>
                        <tr>
                            <th scope="row"><?php echo e($i + 4); ?></th>
                            <th class="fw-light"><?php echo e($perlengkapan[$i]->nama); ?></th>
                            <th class="fw-light"><?php echo e($perlengkapan[$i]->jumlah); ?> <?php if($i == 0): ?>
                                    hari
                                <?php else: ?>
                                    m<sup>2</sup>
                                <?php endif; ?>
                            </th>
                            <th class="fw-light">Rp.<?php echo e(number_format($perlengkapan[$i]->harga, 0, ',', '.')); ?></th>
                            <th class="fw-light"><?php $harga = $perlengkapan[$i]->harga * $perlengkapan[$i]->jumlah; ?>
                                Rp.<?php echo e(number_format($harga, 0, ',', '.')); ?></th>
                            <th class="fw-light">.......</th>
                        </tr>
                    <?php endfor; ?>
                    <tr>
                        <th colspan="6"><br></th>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <th colspan="3" class="text-center"><i>JUMLAH BIAYA JASA SEWA DAN PERALATANNYA</i></th>
                        <th>Rp.<?php echo e(number_format($total, 2, ',', '.')); ?></th>
                    </tr>
                </tbody>
            </table>
            <div class="container-fluid mt-5">
                <h6>TERBILANG: Rp.<?php echo e(number_format($total, 2, ',', '.')); ?></h6>
            </div>

            <div class="container " style="margin-top: 70px">
                <div class="row">
                    <div class="col">
                        <div class="col-lg text-center">
                            <small>Mengetahui: <br></small>
                            <span>BENDAHARA PENERIMAAN</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="col-lg text-center">
                            <span><br></span>
                            <span>Penyewa:</span>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 100px">
                    <div class="col text-center">
                        <span class="fw-bold"><u>SULAIMAN</u><br></span>
                        <small>NIP. 19780807 201001 1 004</small>
                    </div>
                    <div class="col text-center">
                        <?php echo e($peminjam->nama_peminjam); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <pre>







   </pre>
    <div class="container-fluid text-center">
        <h5><b><u>SURAT PERNYATAAN</u></b></h5>
    </div>
    <pre>
    <span>Pemekasan, ...../...../
        Kepada
        Yth. Ibu KEPALA BAKORWIL PAMEKASAN
            Jl. Slamet Riyadi no. 1
        di</span>
<b><u>PAMEKASAN</u></b>
</h6>
</pre>
    </div>

    <div>
        <pre><b>
    Perihal : Permohonan izin menempati balai
            Pertemuan Bakorwil Pamekasan

        yang bertanda tangan di bawah ini: </b></pre>
        <tr><b>Nama &emsp;&emsp;: </b></tr>
        <td><?php echo e($peminjam->nama_peminjam); ?></td><br>
        <tr><b>Alamat &emsp;&ensp;: </b></tr>
        <td><?php echo e($peminjam->alamat); ?></td><br>
        <tr><b>No. Hp &ensp;&emsp;: </b></tr>
        <td><?php echo e($peminjam->no_hp); ?></td><br>
        <pre><b>

        Dengan hormat kami mengajukan izin untuk menempati balai pertemuan
    Badan Koordinasi Wilayah Pemerintah dan Pembangunan Pamekasan pada :</b></pre>
        <tr><b>Tanggal &ensp;&nbsp;: </b></tr>
        <td><?php echo e($peminjam->tgl_awal); ?></td><br>
        <tr><b>Waktu &emsp;&emsp;&emsp;&ensp;: </b></tr>
        <td><?php echo e($peminjam->waktu); ?></td><br>
        <tr><b>Keperluan &emsp;&ensp;: </b></tr>
        <td><?php echo e($peminjam->agenda); ?></td> <br>
        <div>
        </div>
        <pre><b>
    Adapun peralatan yang akan kami pergunakan, antara lain :</b></pre>
        </b>
        </pre>
    </div>
    <div>
        <tr><b>1. Sond system&emsp;&ensp;: </b></tr>
    </div>
    <div>
        <tr><b>2. Kursi Spon/Vernekel&emsp;&ensp;: </b></tr>
    </div>
    <div>
        <tr><b>3. Air Conditioner&emsp;&ensp;: </b></tr>
    </div>
    <div>
        <tr><b>4. Area Kantor dan halaman&emsp;&ensp;: </b></tr>
    </div>
    <pre><b>        Demikian surat permohonan ini diajukan dan atas perkenan Bapak, kami
    menyampaikan terima kasih.</b></pre>
    <div class="container " style="margin-top: 70px">
        <div class="row">
        </div>
    </div>
    <div class="col text-center">
        <div class="col-lg text-center">
            <span><br></span>
            <span>Penyewa:</span>
        </div>
    </div>
    </div>
    <div class="row" style="margin-top: 70px">
        <div class="col text-center">
            <?php echo e($peminjam->nama_peminjam); ?>

        </div>
    </div>
    </div>
    </div>
    </div>
    <pre>








    <p>SURAT PENYATAAN PEMAKAIAN GEDUNG BAKORWIL PAMEKASAN
        1.  Kami akan menempati Gedung Bakorwil IV Pamekasan setelah mendaftarkan diri ke
            petugas Gedung serta sudah memperoleh surat izin dari Kepala Bakorwil IV
            Pamekasan;
        2.  Kami bersedia membayar Retribusi Gedung dan Perlengkapan yang dibutuhkan
            setelah izin Pemakaian Gedung dikeluarkan;
        3.  Kami akan segera memberitahukan kepada petugas Gedung apabila sewaktu-waktu
            terjadi pembatalan pemakaian Gedung dan tidak akan menuntut pengembalian uang
            retribusi yang telah kami setor;
        4.  Kami bersedia membatalkan kegiatan/pemekaian Gedung yang telah dipesan apabila
            sewaktu-waktu Gedung akan dipakai untuk kepentingan Pemerintah dan dapat
            berkoordinasi dengan baik dengan pihak penyedia layanan;
        5.  Kami siap mengganti peralatan/perlengkapan yang rusak yang diakibatkan oleh
            karena pekerjaan kegiatan kami;
        6.  Kami bersedia diberi sanksi apabila melanggar surat pernyataan yang telah disepakati
            bersama.</p>
</pre>
    <div class="container " style="margin-top: 70px">
        <div class="row">
        </div>
    </div>
    <div class="col text-center">
        <div class="col-lg text-center">
            <span><br></span>
            <span>Penyewa:</span>
        </div>
    </div>
    </div>
    <div class="row" style="margin-top: 70px">
        <div class="col text-center">
            <?php echo e($peminjam->nama_peminjam); ?>

        </div>
    </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
<?php /**PATH C:\Users\AlifCom\Music\BAKORWIL\peminjaman-bakorwil\resources\views/user/admin/cetak.blade.php ENDPATH**/ ?>