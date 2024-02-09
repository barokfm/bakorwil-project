@extends('user.layouts.utama')

@section('head')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
@endsection

@section('main-page')

    <body>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex flex-column flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h4">{{ $title }}</h1>
                <div class="btn-toolbar mb-2 mb-md-0"></div>
            </div>
            <div class="container mt-5">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="#" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                        <div class="table-responsive">
                            <table class="stripe row-border order-column nowrap" style="width:100%" id="data_table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th>No. Hp</th>
                                        <th>No. Ktp</th>
                                        <th>Foto Ktp</th>
                                        <th>Agenda</th>
                                        <th>Tgl. Acara</th>
                                        <th>Waktu</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($peminjams as $key => $peminjam)
                                        <tr>
                                            <td></td>
                                            <td>{{ $peminjam->nama_peminjam }}</td>
                                            <td>{{ $peminjam->alamat }}</td>
                                            <td>{{ $peminjam->email }}</td>
                                            <td>{{ $peminjam->no_hp }}</td>
                                            <td>{{ $peminjam->no_ktp }}</td>
                                            <td><img src="storage/{{ $peminjam->foto_ktp }}" alt="foto_ktp" width="80px">
                                            <td>{{ $peminjam->agenda }}</td>
                                            <td>{{ $peminjam->tgl_acara }}</td>
                                            <td>{{ $peminjam->waktu }}</td>
                                            <td class="text-center d-flex gap-2">
                                                <a href="#" class="btn btn-sm btn-primary">EDIT</a>

                                                <a type="button" href="/cetak/{{ $peminjam->id_peminjam }}"
                                                    class=" btnPrint btn btn-sm btn-warning">PRINT</a>
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data Peminjam belum Tersedia.
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $peminjams->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
            <a href="/" class="btn btn-warning mb-3">Back to Home</a>
        </main>
    </body>
    @push('script')
        <script>
            $(document).ready(function() {
                $(".btnPrint").printPage();
            });
        </script>

        <script>
            // Formatting function for row details - modify as you need
            // function format(d) {
            //     // `d` is the original data object for the row
            //     return (
            //         '<dl>' +
            //         '<dt>Sound System:</dt>' +
            //         '<dd>' +
            //         d.sound_system +
            //         '</dd>' +
            //         '<dt>Kursi:</dt>' +
            //         '<dd>' +
            //         d.kursi +
            //         '</dd>' +
            //         '<dt>Area:</dt>' +
            //         '<dd>' +
            //         d.area +
            //         '</dd>' +
            //         '<dt>AC: </dt>' +
            //         '<dd>' +
            //         d.ac +
            //         '</dd>' +
            //         '</dl>'
            //     );
            // }

            var table = new DataTable('#data_table', {
                // ajax: '../ajax/data/objects.txt',
                columnDefs: [{
                    orderable: false,
                    className: 'select-checkbox',
                    targets: 0
                }],
                fixedColumns: {
                    left: 2
                },
                order: [
                    [1, 'asc']
                ],
                paging: true,
                scrollCollapse: true,
                scrollX: true,
                scrollY: 300,
                select: {
                    style: 'os',
                    selector: 'td:first-child'
                }
            });

            // table.on('requestChild.dt', function(e, row) {
            //     row.child(format(row.data())).show();
            // });

            // // Add event listener for opening and closing details
            // $('#data_table').on('click', 'td.dt-control', function() {
            //     var tr = $(this).closest('tr');
            //     var row = table.row(tr);

            //     if (row.child.isShown()) {
            //         // This row is already open - close it
            //         row.child.hide();
            //     } else {
            //         // Open this row
            //         row.child(format(row.data())).show();
            //     }
            // });
        </script>
    @endpush
@endsection
