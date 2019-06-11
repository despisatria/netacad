<?php $__env->startSection('title'); ?>
    NETACAD - Guru 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>    
<div class="col-md-10">
    <div class="row">
      <div class="title-page">
        <div class="col-md-6">
          <span>
            <ol class="breadcrumb">
              <li class="active">Hasil Evaluasi</li>               
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
        <div class="col-md-10 col-md-offset-1">
          <div class="program-card">
            <div class="col-md-6">
              <a href="result-ipaddress.php">
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
            <a href="<?php echo e(url('/result-ipaddress')); ?>">
                <div class="body-card fadeInUp animated">
                  <div class="thumb-card program2">
                    <div class="thumb-overlay2"></div>
                  </div>
                  <div class="title-card">
                    <span class="lg-title">IP Addressing</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a href="result-ipaddress.php">
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
              <a href="result-ipaddress.php">
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
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teddy\Documents\Code\netacad\netacad\resources\views/amin-dashboard.blade.php ENDPATH**/ ?>