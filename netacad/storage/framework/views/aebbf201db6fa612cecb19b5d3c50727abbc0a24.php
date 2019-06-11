<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Join Educode and learn to code from the best online free courses programs.">
    <link rel='icon' href='<?php echo e(asset("img/favicon.png")); ?>'>

    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900,900i" rel="stylesheet">
    <link href='<?php echo e(asset("css/bootstrap.min.css")); ?>' rel='stylesheet'>
    <link href='<?php echo e(asset("css/font-awesome.min.css")); ?>' rel='stylesheet'>
    <link href='<?php echo e(asset("css/animate.min.css")); ?>' rel='stylesheet'>
    <link href='<?php echo e(asset("css/sweetalert.css")); ?>' rel='stylesheet'>
    <link href='<?php echo e(asset("css/style.css")); ?>' rel='stylesheet'>
    
    <script src='<?php echo e(asset("js/jquery.min.js")); ?>'></script>
    <script src='<?php echo e(asset("js/bootstrap.min.js")); ?>'></script>
    <script src='<?php echo e(asset("js/waypoint.min.js")); ?>'></script>
    <script src='<?php echo e(asset("js/sweetalert.min.js")); ?>'></script>
  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2">
            <div class="row">
                <div class="menu-dash">
                <div class="header-dash">
                    <img src="<?php echo e(asset('/img/netacad-white1.png')); ?>" width="178px;">
                </div>
                  <?php echo $__env->yieldContent('sideMenu'); ?>
              </div>
          </div>
      </div>
      <div class="col-md-10">
        <div class="row">
          <div class="title-page">
            <div class="col-md-6">
              <span>
                <ol class="breadcrumb">
                  <li class="active"><?php echo $__env->yieldContent('breadcrum'); ?></li>
                </ol>
              </span>
            </div>
            <div class="col-md-4 text-right">
              <span>Halo,
                <?php echo e(Auth::user()->name); ?>

              </span>
            </div>
          </div>
          <div class="content">
            <?php echo $__env->yieldContent('content'); ?>
          </div>
          </div>
        </div>
      </div>
    </div>    
  </body>
</html>
<?php /**PATH C:\Users\Teddy\Documents\Code\netacad\netacad\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>