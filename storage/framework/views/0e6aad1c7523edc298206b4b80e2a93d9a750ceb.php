<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-page'); ?>

    <body>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex flex-column flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h4">Data Peminjam</h1>
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
                                        <th>Status Sekertaris</th>
                                        <th>Status Kepala</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $peminjams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $peminjam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td></td>
                                            <td><?php echo e($peminjam->nama_peminjam); ?></td>
                                            <td><?php echo e($peminjam->alamat); ?></td>
                                            <td><?php echo e($peminjam->email); ?></td>
                                            <td><?php echo e($peminjam->no_hp); ?></td>
                                            <td><?php echo e($peminjam->no_ktp); ?></td>
                                            <td><img src="storage/<?php echo e($peminjam->foto_ktp); ?>" alt="foto_ktp" width="80px">
                                            <td><?php echo e($peminjam->agenda); ?></td>
                                            <td><?php echo e($peminjam->tgl_acara); ?></td>
                                            <td><?php echo e($peminjam->waktu); ?></td>
                                            <td class="">
                                                <?php if($peminjam->status_sekertaris === 1): ?>
                                                    <img src="/svg/check.svg" alt="validated">
                                                <?php else: ?>
                                                    <img src="/svg/cancel.svg" alt="invalidated">
                                                <?php endif; ?>
                                            </td>
                                            <td class="">
                                                <?php if($peminjam->status_kepala === 1 ): ?>
                                                    <img src="/svg/check.svg" alt="validated">
                                                <?php else: ?>
                                                    <img src="/svg/cancel.svg" alt="invalidated">
                                                <?php endif; ?>
                                            </td>
                                            <td class="text-center d-flex gap-2">
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                                                    <a href="/edit/<?php echo e($peminjam->id_peminjam); ?>" class="btn btn-sm btn-primary">EDIT</a>
                                                    <a type="button" href="/cetak/<?php echo e($peminjam->id_peminjam); ?>"
                                                        class=" btnPrint btn btn-sm btn-warning">PRINT</a>
                                                    <a href="/hapus/<?php echo e($peminjam->id_peminjam); ?>" class="btn btn-sm btn-danger">HAPUS</a>
                                                <?php endif; ?>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('kepala')): ?>
                                                    <form action="/kepala/<?php echo e($peminjam->id_peminjam); ?>" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="radio" name="status_kepala" class="d-none" value='true' checked>
                                                        <button type="submit" class="btn btn-success">Approved</button>
                                                    </form>
                                                    <form action="/kepalaTolak/<?php echo e($peminjam->id_peminjam); ?>" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="radio" name="status_kepala" class="d-none" value='true' checked>
                                                        <button type="submit" class="btn btn-danger">Disapproved</button>
                                                    </form>
                                                <?php endif; ?>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sekertaris')): ?>
                                                <form action="/sekertaris/<?php echo e($peminjam->id_peminjam); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="radio" name="status_sekertaris" class="d-none" value='true' checked>
                                                    <button type="submit" class="btn btn-success">Approved</button>
                                                </form>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <div class="alert alert-danger">
                                            Data Peminjam belum Tersedia.
                                        </div>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                            <?php echo e($peminjams->links()); ?>

                        </div>
                    </div>
                </div>
                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
            </div>
            <a href="/" class="btn btn-warning mb-3">Back to Home</a>
        </main>
    </body>
    <?php $__env->startPush('script'); ?>
        <script>
            $(document).ready(function() {
                $(".btnPrint").printPage();
            });
        </script>

        <script>
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
                scrollY: 1000,
                select: {
                    style: 'os',
                    selector: 'td:first-child'
                },
            });

            table.rows().every( function() {
                this.child( 'Ini informasi tambahan tiap row' );
            });

            $('#data_table').on( 'click', 'tr', function() {
                var child = table.row( this ).child;

                if ( child.isShown() ){
                    child.hide();
                }
                else {
                    child.show();
                }
            } );

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
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.utama', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AlifCom\Music\BAKORWIL\peminjaman-bakorwil\resources\views/user/data.blade.php ENDPATH**/ ?>