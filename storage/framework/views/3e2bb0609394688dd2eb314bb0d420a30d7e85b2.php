
<?php $__env->startSection('show-data'); ?>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-fullscreen-xxl-down">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Peminjam</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="table-responsive">
                <table class="table table-sm table-striped custom-table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Email</th>
                            <th scope="col">No. Hp</th>
                            <th scope="col">No. Ktp</th>
                            <th scope="col">Foto Ktp</th>
                            <th scope="col">Agenda</th>
                            <th scope="col">Tgl. Acara</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Sound</th>
                            <th scope="col">Kursi</th>
                            <th scope="col">Area</th>
                            <th scope="col">AC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $peminjams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $peminjam): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($key + 1); ?></td>
                                
                                <td><?php echo e($peminjam->nama_peminjam); ?></td>
                                <td><?php echo e($peminjam->alamat); ?></td>
                                <td><?php echo e($peminjam->email); ?></td>
                                <td><?php echo e($peminjam->no_hp); ?></td>
                                <td><?php echo e($peminjam->no_ktp); ?></td>
                                <td><?php echo e($peminjam->foto_ktp); ?></td>
                                <td><?php echo e($peminjam->agenda); ?></td>
                                <td><?php echo e($peminjam->tgl_acara); ?></td>
                                <td><?php echo e($peminjam->waktu); ?></td>
                                <td><?php echo e($peminjam->sound_system); ?></td>
                                <td><?php echo e($peminjam->kursi); ?></td>
                                <td><?php echo e($peminjam->area); ?></td>
                                <td><?php echo e($peminjam->ac); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php echo e($peminjams->links()); ?>

            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php /**PATH C:\Users\AlifCom\Music\BAKORWIL\peminjaman-bakorwil\resources\views/user/show.blade.php ENDPATH**/ ?>