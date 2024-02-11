<?php $__env->startSection('main-page'); ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Profil <?php echo e(auth()->user()->name); ?></h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>

        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.utama', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AlifCom\Music\BAKORWIL\peminjaman-bakorwil\resources\views/user/profile.blade.php ENDPATH**/ ?>