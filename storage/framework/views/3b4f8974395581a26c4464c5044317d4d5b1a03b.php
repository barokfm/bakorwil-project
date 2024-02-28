<?php $__env->startSection('main'); ?>
    <div class="container text-center text-align-center py-3 rounded my-4 shadow-sm bg-primary-subtle">
        <h1>Edit Data</h1>
    </div>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <div class="container bg-white py-2 rounded shadow mb-3">
        <form action="/edit/<?php echo e($peminjam->id); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            
            <div class="mb-3 border bg-body-tertiary rounded p-3 mt-3">
                <label for="nama_peminjam" class="form-label">Nama Peminjam<small class="text-danger">*</small></label>
                <input type="text" class="form-control" placeholder="John Doe" name="nama_peminjam" value="<?php echo e($peminjam->nama_peminjam); ?>" required>
            </div>
            <div class="mb-3 border bg-body-tertiary rounded p-3 mt-3">
                <label for="alamat" class="form-label">Alamat<small class="text-danger">*</small></label>
                <input type="text" class="form-control" name="alamat" value="<?php echo e($peminjam->alamat); ?>" required>
            </div>
            <div class="mb-3 border bg-body-tertiary rounded p-3 mt-3">
                <label for="email" class="form-label">Email<small class="text-danger">*</small></label>
                <input type="email" class="form-control" name="email" value="<?php echo e($peminjam->email); ?>" required>
            </div>
            <div class="mb-3 border bg-body-tertiary rounded p-3 mt-3">
                <label for="no-telp" class="form-label">Nomor HP<small class="text-danger">*</small></label>
                <input type="text" class="form-control" name="no_hp" value="<?php echo e($peminjam->no_hp); ?>" required>
            </div>
            <div class="mb-3 border bg-body-tertiary rounded p-3 mt-3">
                <label for="no_ktp" class="form-label">No. KTP<small class="text-danger">*</small></label>
                <input type="text" class="form-control" name="no_ktp" value="<?php echo e($peminjam->no_ktp); ?>" required>
            </div>
            <div class="container-fluid border bg-body-tertiary rounded d-flex flex-column justify-content-center">
                <label for="photo" class="form-label">Foto KTP<small class="text-danger">*</small></label>
                <img id="old_image" class="img-fluid mb-3 col-sm-3" src="/storage/<?php echo e($peminjam->foto_ktp); ?>">
                <img class="img-preview img-fluid mb-3 col-sm-3">
                <div class="my-2">
                    <input class="form-control <?php $__errorArgs = ['foto_ktp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="image" type="file"
                        name="foto_ktp" required onchange="previewImage()">
                    <?php $__errorArgs = ['foto_ktp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="mt-3 border bg-body-tertiary rounded p-3">
                <label for="name" class="form-label">Agenda<small class="text-danger">*</small></label>
                <input type="text" class="form-control" name="agenda" value="<?php echo e($peminjam->agenda); ?>" >
            </div>
            <div class="container-fluid border bg-body-tertiary mt-3 rounded d-flex flex-column justify-content-center">
                <label for="date" class="form-label">Tanggal Acara<small class="text-danger">*</small></label>
                <input type="date" name="tgl_awal" class="from-control text-secondary border p-1 rounded" id="date" value="<?php echo e($peminjam->tgl_awal); ?>" required>
                <small class="text-danger"><i>Tentukan tanggal acara anda</i></small>
            </div>
            <div class="container-fluid border bg-body-tertiary mt-3 rounded d-flex flex-column justify-content-center">
                <label for="date" class="form-label">Tanggal Berakhir<small class="text-danger">*</small></label>
                <input type="date" name="tgl_akhir" class="from-control text-secondary border p-1 rounded" id="date" value="<?php echo e($peminjam->tgl_akhir); ?>" required>
                <small class="text-danger"><i>Tentukan tanggal berakhir acara anda</i></small>
            </div>
            <div class="container-fluid mt-3 border bg-body-tertiary rounded d-flex flex-column justify-content-center">
                <label for="time" class="form-label">Waktu Acara<small class="text-danger">*</small></label>
                <input type="time" name="waktu" class="from-control text-secondary border p-1 rounded mb-2" id="time" value="<?php echo e($peminjam->waktu); ?>" required>
            </div>
            <div class="container-fluid mt-3 border bg-body-tertiary rounded d-flex flex-column justify-content-center">
                <label for="jam_operasional" class="form-label">Jam Operasional<small class="text-danger">*</small></label>
                <input type="number" name="jam_operasional" class="from-control text-secondary border p-1 rounded" id="time" value="<?php echo e($peminjam->jam_operasional); ?>" required>
                <small class="text-danger"><i>Tentukan berapa jam operasional yang anda inginkan!</i></small>
            </div>

            <div class="container d-flex justify-content-end gap-3 m-3">
                <a href="/" class="btn btn-danger pb-2 px-5">Cancel</a>
                <button class="btn btn-primary pb-2 px-5" type="submit" value="save">Next</button>
            </div>
        </form>
    </div>

    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const old_img = document.querySelector('#old_image');
            const imgPreview = document.querySelector('.img-preview');

            old_img.style.display = 'none';
            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AlifCom\Music\BAKORWIL\peminjaman-bakorwil\resources\views/user/admin/edit.blade.php ENDPATH**/ ?>