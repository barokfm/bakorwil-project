<?php $__env->startSection('main-page'); ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Edit Data</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>
        <form action="/edit/<?php echo e($peminjam->id_peminjam); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="nama_peminjam" class="form-label">Nama Peminjam<small class="text-danger">*</small></label>
                <input type="text" class="form-control" placeholder="John Doe" name="nama_peminjam" required value="<?php echo e($peminjam->nama_peminjam); ?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat<small class="text-danger">*</small></label>
                <input type="text" class="form-control" name="alamat" required value="<?php echo e($peminjam->alamat); ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email<small class="text-danger">*</small></label>
                <input type="email" class="form-control" name="email" required value="<?php echo e($peminjam->email); ?>" >
            </div>
            <div class="mb-3">
                <label for="no-telp" class="form-label">Nomor HP<small class="text-danger">*</small></label>
                <input type="text" class="form-control" name="no_hp" required value="<?php echo e($peminjam->no_hp); ?>" >
            </div>
            <div class="mb-3">
                <label for="no_ktp" class="form-label">No. KTP<small class="text-danger">*</small></label>
                <input type="text" class="form-control" name="no_ktp" required value="<?php echo e($peminjam->no_ktp); ?>" >
            </div>
            <div class="container-fluid border rounded d-flex flex-column justify-content-center">
                <label for="photo" class="form-label">Foto KTP<small class="text-danger">*</small></label>
                <img class="img-preview img-fluid mb-3 col-sm-3" src="/storage/<?php echo e($peminjam->foto_ktp); ?>">
                <div class="my-2">
                    <input class="form-control <?php $__errorArgs = ['foto_ktp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="image" type="file"
                        name="foto_ktp" onchange="previewImage()">
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
            <div class="mb-3">
                <label for="name" class="form-label">Agenda<small class="text-danger">*</small></label>
                <input type="text" class="form-control" name="agenda" required value="<?php echo e($peminjam->agenda); ?>">
            </div>
            <label for="date" class="form-label">Tanggal Acara<small class="text-danger">*</small></label>
            <div class="container-fluid border rounded d-flex flex-column justify-content-center">
                <div class="my-2">
                    <input type="date" name="tgl_acara" class="from-control text-secondary" id="date" required value="<?php echo e($peminjam->tgl_acara); ?>" >
                </div>
            </div>
            <label for="time" class="form-label">Waktu Acara<small class="text-danger">*</small></label>
            <div class="container-fluid border rounded d-flex flex-column justify-content-center">
                <div class="my-2">
                    <input type="time" name="waktu" class="from-control text-secondary" id="time" required value="<?php echo e($peminjam->waktu); ?>" >
                </div>
            </div>
            <label for="sound_system" class="form-label mt-3">Sound System<small class="text-danger">*</small></label>
            <div class="container-fluid border rounded">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sound_system" <?php echo e($peminjam->sound_system === 'ya' ? 'checked' : ''); ?> id="sound_system" value="ya">
                    <label class="form-check-label" for="sound_system">
                        Ya
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sound_system" <?php echo e($peminjam->sound_system === 'tidak' ? 'checked' : ''); ?> id="sound_system" value="tidak">
                    <label class="form-check-label" for="sound_system">
                        Tidak
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="kursi" class="form-label">Kursi Vernekel<small class="text-danger">*</small></label>
                <input type="number" class="form-control" name="kursi" placeholder="Persediaan Kursi 150 Buah"
                    required max="150" value="<?php echo e($peminjam->kursi); ?>">
            </div>
            <div class="mb-3">
                <label for="area" class="form-label">Area Kantor Dan Halaman<small
                        class="text-danger">*</small></label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="area" <?php echo e($peminjam->sound_system === 'ya' ? 'checked' : ''); ?> value="ya">
                    <label class="form-check-label" for="area">
                        Ya
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" <?php echo e(!$peminjam->sound_system === 'tidak' ? '' : 'checked'); ?> name="area" value="tidak">
                    <label class="form-check-label" for="area">
                        Tidak
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="ac" class="form-label">Air Conditioner (AC)<small class="text-danger">*</small></label>
                <input type="number" class="form-control" name="ac" placeholder="Persediaan AC 8 Unit" value="<?php echo e($peminjam->ac); ?>" required>
            </div>
            <div class="container d-flex justify-content-end gap-3 m-3">
                <a href="/data" class="btn btn-danger pb-2 px-5">Cancel</a>
                <button class="btn btn-primary pb-2 px-5" type="submit" value="save">Save</button>
            </div>
        </form>
        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
    </main>

    <script>
        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.utama', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AlifCom\Music\BAKORWIL\peminjaman-bakorwil\resources\views/user/admin/edit.blade.php ENDPATH**/ ?>