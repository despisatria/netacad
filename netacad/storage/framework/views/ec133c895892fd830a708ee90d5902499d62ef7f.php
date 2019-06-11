<?php $__env->startSection('title'); ?>
    NETACAD - Beranda
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrum'); ?>
    Dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sideMenu'); ?>
<div class="nav">
    <ul class="list-group">
    <li>
        <a href="<?php echo e(url('home')); ?>" class="list-group-item active">
        <i class="fa fa-home fa-2x fa-fw " aria-hidden="true"></i><span> Beranda</span>
        </a>
    </li>
    <li>
        <a href="<?php echo e(url('evaluasi')); ?>" class="list-group-item">
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
<div class="col-md-10 col-md-offset-1">
    <div class="program-card">
        <div class="col-md-6">
            <a href="<?php echo e(url('networking')); ?>">
                <div class="body-card fadeInUp animated">
                    <div class="thumb-card program1">
                        <div class="thumb-overlay1"></div>
                    </div>
                    <div class="title-card">
                        <span class="lg-title">Basic Networking</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a href="<?php echo e(url('ipaddress')); ?>">
                <div class="body-card fadeInUp animated">
                    <div class="thumb-card program2">
                        <div class="thumb-overlay2"></div>
                    </div>
                    <div class="title-card">
                        <span class="lg-title">IP Addressing & Subnetting</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a href="<?php echo e(url('#')); ?>">
                <div class="body-card fadeInUp animated">
                    <div class="thumb-card program4">
                        <div class="thumb-overlay4">
            </div>
        </div>
        <div class="title-card">
            <span class="lg-title">Network Routing</span>
        </div>
    </div>
</a>
</div>
    <div class="col-md-6">
        <a href="#">
            <div class="body-card fadeInUp animated">
                <div class="thumb-card program5">
                    <div class="thumb-overlay5">
                    </div>
                </div>
        <div class="title-card">
            <span class="lg-title">Virtual Local Area Network</span>
        </div>
    </div>
</a>
    </div>
</div>  
</div>


<?php if(isset($alert) == true): ?>
    <?php if($alert == 'berhasilDiUpload'): ?>
    <script type="text/javascript">
        // file sudah di upload

        swal("A wild Pikachu appeared! What do you want to do?", {
            buttons: {
                cancel: "Run away!",
                catch: {
                text: "Throw Pokéball!",
                value: "catch",
                },
                defeat: true,
            },
            })
            .then((value) => {
            switch (value) {
            
                case "defeat":
                swal("Pikachu fainted! You gained 500 XP!");
                break;
            
                case "catch":
                swal("Gotcha!", "Pikachu was caught!", "success");
                break;
            
                default:
                swal("Got away safely!");
            }
        });

    </script>
    <?php else: ?>
        <script type="text/javascript">
                swal('Berhasil!', 'Nilai Anda : '+<?php echo e($nilai); ?>, 'success');
        </script>
    <?php endif; ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teddy\Documents\Code\netacad\netacad\resources\views/dashboard.blade.php ENDPATH**/ ?>