<?php $__env->startSection('main'); ?>
    <div class="container text-center text-align-center py-3 rounded my-4 shadow-sm bg-primary-subtle">
        <h1>Formulir Data Peminjam</h1>
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
        <form action="<?php echo e(route('form_peminjaman')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="mb-3 border bg-body-tertiary rounded p-3 mt-3">
                <label for="nama_peminjam" class="form-label">Nama Peminjam<small class="text-danger">*</small></label>
                <input type="text" class="form-control" placeholder="John Doe" name="nama_peminjam" required>
            </div>
            <div class="mb-3 border bg-body-tertiary rounded p-3 mt-3">
                <label for="alamat" class="form-label">Alamat<small class="text-danger">*</small></label>
                <input type="text" class="form-control" name="alamat" required>
            </div>
            <div class="mb-3 border bg-body-tertiary rounded p-3 mt-3">
                <label for="email" class="form-label">Email<small class="text-danger">*</small></label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3 border bg-body-tertiary rounded p-3 mt-3">
                <label for="no-telp" class="form-label">Nomor HP<small class="text-danger">*</small></label>
                <input type="text" class="form-control" name="no_hp" required>
            </div>
            <div class="mb-3 border bg-body-tertiary rounded p-3 mt-3">
                <label for="no_ktp" class="form-label">No. KTP<small class="text-danger">*</small></label>
                <input type="text" class="form-control" name="no_ktp" required>
            </div>
            <div class="container-fluid border bg-body-tertiary rounded d-flex flex-column justify-content-center">
                <label for="photo" class="form-label">Foto KTP<small class="text-danger">*</small></label>
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
                <input type="text" class="form-control" name="agenda">
            </div>
            <div class="container-fluid border bg-body-tertiary mt-3 rounded d-flex flex-column justify-content-center">
                <label for="date" class="form-label">Tanggal Acara<small class="text-danger">*</small></label>
                <input type="date" name="tgl_awal" class="from-control text-secondary border p-1 rounded" id="date" required>
                <small class="text-danger"><i>Tentukan tanggal acara anda</i></small>
            </div>
            <div class="container-fluid border bg-body-tertiary mt-3 rounded d-flex flex-column justify-content-center">
                <label for="date" class="form-label">Tanggal Berakhir<small class="text-danger">*</small></label>
                <input type="date" name="tgl_akhir" class="from-control text-secondary border p-1 rounded" id="date" required>
                <small class="text-danger"><i>Tentukan tanggal berakhir acara anda</i></small>
            </div>
            <div class="container-fluid mt-3 border bg-body-tertiary rounded d-flex flex-column justify-content-center">
                <label for="time" class="form-label">Waktu Acara<small class="text-danger">*</small></label>
                <input type="time" name="waktu" class="from-control text-secondary border p-1 rounded mb-2" id="time" required>
            </div>
            <div class="container-fluid mt-3 border bg-body-tertiary rounded d-flex flex-column justify-content-center">
                <label for="time" class="form-label">Waktu Operasional<small class="text-danger">*</small></label>
                <input type="time" name="jam_operasional" class="from-control text-secondary border p-1 rounded" id="time" required>
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
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AlifCom\Music\BAKORWIL\peminjaman-bakorwil\resources\views/user/peralatan.blade.php ENDPATH**/ ?>