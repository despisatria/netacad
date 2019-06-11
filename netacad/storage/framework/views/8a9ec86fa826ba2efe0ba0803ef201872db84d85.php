<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Join Educode and learn to code from the best online free courses programs.">
    <link rel="icon" href="<?php echo e(asset('img/favicon.png')); ?>">
    
    <title>NETACAD - Admin</title>
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/animate.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/datatable.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery-3.3.1.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/waypoint.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/datatable.js')); ?>"></script>
    <script src="<?php echo e(asset('js/datatable-bootstrap.js')); ?>"></script>
    
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="row">
                    <div class="menu-dash">
                        <div class="header-dash">
                            <img src="<?php echo e(asset('img/netacad-white1.png')); ?>" width="178px;">
                        </div>
                        <div class="nav">
                            <ul class="list-group">
                                <li>
                                    <a href="result.php" class="list-group-item active">
                                        <i class="fa fa-bar-chart fa-2x fa-fw " aria-hidden="true"></i><span> Hasil Evaluasi</span>
                                    </a>
                                </li>
                            </li>
                            <a href="<?php echo e(route('logout')); ?>" class="list-group-item" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out fa-2x fa-fw" aria-hidden="true"></i><span> Keluar</span>
                            
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->yieldContent('content'); ?>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
</body>
</html><?php /**PATH C:\Users\Teddy\Documents\Code\netacad\netacad\resources\views/layouts/admin.blade.php ENDPATH**/ ?>