<?php $__env->startSection('title'); ?>
    NETACAD - Evaluasi
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrum'); ?>
    Dashboard / Evaluasi
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
<div class="col-md-10 col-md-offset-1">
        <div class="program-card">
          <div class="col-md-12">
            <div class="body-card-class fadeInUp animated bg-card">
              <div class="row">
                <div class="col-md-10">
                  <div class="top-card-class">
                    <i class="gold fa fa-trophy fa-2x" aria-hidden="true"></i>
                    &nbsp;&nbsp;
                    <span> Nilai : 80</span>
                    <h3>Basic Networking</h3>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="menu-card-catalog">
                    <div class="bar-skill">
                      <i class="fa fa-book active" aria-hidden="true"></i>
                    </div>
                    <span>20 Soal</span>
                    <a href="#" class="btn btn-success disabled btn-disable">Mulai</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="body-card-class fadeInUp animated bg-card">
              <div class="row">
                <div class="col-md-10">
                  <div class="top-card-class">
                    <?php if($nilaiIpaddress != NULL): ?>
                      <i class="gold fa fa-trophy fa-2x" aria-hidden="true"></i>
                      &nbsp;&nbsp;
                      <?php if($nilaiIpaddress->nilai > 0): ?>
                        <span> Nilai : <?php echo e($nilaiIpaddress->nilai); ?></span>
                      <?php endif; ?>
                    <?php else: ?>
                      <i class="grey fa fa-trophy fa-2x" aria-hidden="true"></i>
                      &nbsp;&nbsp;
                      <span> Nilai : N/A</span>
                    <?php endif; ?>
                    <h3>IP Addressing & Subnetting</h3>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="menu-card-catalog">
                    <div class="bar-skill">
                      <i class="fa fa-book active" aria-hidden="true"></i>
                    </div>
                    <span>20 Soal</span>
                    <?php if($nilaiIpaddress != NULL): ?>
                    <a href="#" class="btn btn-primary" disable>Mulai</a>
                    <?php else: ?>
                    <a href="<?php echo e(url('/evaluasiIpaddress')); ?>" class="btn btn-success">Mulai</a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="body-card-class fadeInUp animated bg-card">
              <div class="row">
                <div class="col-md-10">
                  <div class="top-card-class">
                    <i class="grey fa fa-trophy fa-2x" aria-hidden="true"></i>
                    &nbsp;&nbsp;
                    <span> Nilai : N/A</span>
                    <h3>Network Routing</h3>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="menu-card-catalog">
                    <div class="bar-skill">
                      <i class="fa fa-book active" aria-hidden="true"></i>
                    </div>
                    <span>20 Soal</span>
                    <a href="eval-ipaddress.php" class="btn btn-success">Mulai</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="body-card-class fadeInUp animated bg-card">
              <div class="row">
                <div class="col-md-10">
                  <div class="top-card-class">
                    <i class="grey fa fa-trophy fa-2x" aria-hidden="true"></i>
                    &nbsp;&nbsp;
                    <span> Nilai : N/A</span>
                    <h3>Virtual Local Area Network</h3>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="menu-card-catalog">
                    <div class="bar-skill">
                      <i class="fa fa-book active" aria-hidden="true"></i>
                    </div>
                    <span>20 Soal</span>
                    <a href="eval-ipaddress.php" class="btn btn-success">Mulai</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teddy\Documents\Code\netacad\netacad\resources\views/evaluasi.blade.php ENDPATH**/ ?>