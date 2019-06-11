<?php $__env->startSection('title'); ?>
NETACAD - Evaluasi Ip Address
<?php $__env->stopSection(); ?>


<?php $__env->startSection('breadcrum'); ?>
    Dashboard / Evaluasi / IP Address
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sideMenu'); ?>
<div class="nav">
    <ul class="list-group">
    <li>
        <a href="<?php echo e(url('home')); ?>" class="list-group-item">
        <i class="fa fa-home fa-2x fa-fw " aria-hidden="true"></i><span> Beranda</span>
        </a>
    </li>
    <li>
        <a href="<?php echo e(url('evaluasi')); ?>" class="list-group-item active">
        <i class="fa fa-book fa-2x fa-fw" aria-hidden="true"></i><span> Evaluasi</span>
        </a>
    </li>
    <li>
        <a href="<?php echo e(url('tentang')); ?>" class="list-group-item">
        <i class="fa fa-info-circle fa-2x fa-fw" aria-hidden="true"></i><span> Tentang</span>
        </a>
    </li>
    <li>
        <a href="<?php echo e(url('logout')); ?>" class="list-group-item" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out fa-2x fa-fw" aria-hidden="true"></i><span> Keluar</span>
        
        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
        </form>
        </a>
    </li>
    </ul>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>    

</div>
<div class="col-md-12">
<form action="<?php echo e(url('evaluasiIpaddress')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php for($i = 1; $i <= 20; $i++): ?>
    <div class="col-md-12">
        <div class="body-card-setting">
            <div class="setting-page">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="soal1" >
                        <div class="embed-responsive embed-responsive-16by9-edit">
                            <table>
                                <tr>
                                    <td width="30px" valign="top"><h4><?php echo e($i); ?>. </h4></td>
                                    <td><h4><?php echo $soal[$i]; ?></h4></td>
                                </tr>
                                <tr>
                                    <td width="30px"></td>
                                    <td>
                                        <div class="funkyradio">
                                            <div class="funkyradio-success">
                                                <input type="radio" name="soal<?php echo e($i); ?>" id="radio<?php echo e($i); ?>1" value="<?php echo e($kunciJawabanA[$i]); ?>" />
                                                <label for="radio<?php echo e($i); ?>1"><?php echo $pilihanA[$i]; ?> </label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="radio" name="soal<?php echo e($i); ?>" id="radio<?php echo e($i); ?>2" value="<?php echo e($kunciJawabanB[$i]); ?>" />
                                                <label for="radio<?php echo e($i); ?>2"><?php echo $pilihanB[$i]; ?></label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="radio" name="soal<?php echo e($i); ?>" id="radio<?php echo e($i); ?>3" value="<?php echo e($kunciJawabanC[$i]); ?>"  />
                                                <label for="radio<?php echo e($i); ?>3"><?php echo $pilihanC[$i]; ?></label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="radio" name="soal<?php echo e($i); ?>" id="radio<?php echo e($i); ?>4" value="<?php echo e($kunciJawabanD[$i]); ?>"  />
                                                <label for="radio<?php echo e($i); ?>4"><?php echo $pilihanD[$i]; ?></label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="radio" name="soal<?php echo e($i); ?>" id="radio<?php echo e($i); ?>5" value="<?php echo e($kunciJawabanE[$i]); ?>"  />
                                                <label for="radio<?php echo e($i); ?>5"><?php echo $pilihanE[$i]; ?></label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endfor; ?>
    <div class="row">
            <div class="col-md-12 text-center" style="margin-bottom: 50px; margin-top:20px">
                <input type="submit" class="btn btn-lg btn-success"  value="Selesai Evaluasi">
            </div> 
        </div>
    </div>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teddy\Documents\Code\netacad\netacad\resources\views/evaluasiIpaddress.blade.php ENDPATH**/ ?>