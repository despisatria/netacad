<?php $__env->startSection('title'); ?>
    NETACAD - Ip Address
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrum'); ?>
    Dashboard / IP Address
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

</div>
<div class="col-md-12">
  <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success alert-block text-center">
          <button type="button" class="close" data-dismiss="alert">×</button> 
            <strong><?php echo e($message); ?></strong>
        </div>
      <?php endif; ?>
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-2 program-list">
              <span>Pematerian</span>
              <ul class="nav nav-tabs nav-program" role="tablist">
                <li role="presentation" class="active">
                  <a href="#materi" aria-controls="materi" role="tab" data-toggle="tab">Apa itu IP Address ?</a>
                </li>
                <li role="presentation">
                  <a href="#materi2" aria-controls="materi" role="tab" data-toggle="tab">Jenis IP Address</a>
                </li>
                <li role="presentation">
                  <a href="#materi3" aria-controls="materi" role="tab" data-toggle="tab">Network ID dan Host ID</a>
                </li>
                <li role="presentation">
                  <a href="#materi4" aria-controls="materi" role="tab" data-toggle="tab">Prefix dan Subnetmask</a>
                </li>
                <li role="presentation">
                  <a href="#materi5" aria-controls="materi" role="tab" data-toggle="tab">Kelas IP Address</a>
                </li>
                <li role="presentation">
                  <a href="#materi6" aria-controls="materi" role="tab" data-toggle="tab">Subnetting</a>
                </li>
                <li role="presentation">
                  <a href="#materi7" aria-controls="materi" role="tab" data-toggle="tab">VLSM</a>
                </li>
                <span>Latihan Praktik</span>
                <li role="presentation">
                  <a href="#praktik1" aria-controls="praktik" role="tab" data-toggle="tab">Latihan1</a>
                </li>
              </ul>
            </div>
            <div class="col-md-10">
              <div class="body-card-setting">
                <div class="setting-page">
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="materi">
                      <div class="embed-responsive embed-responsive-16by9">
                        <!-- <iframe src="asset/video/program1.mp4" frameborder="0" allowfullscreen autoplay></iframe> -->
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="materi2">
                      <div class="embed-responsive embed-responsive-16by9">
                        
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="materi3">
                      <div class="embed-responsive embed-responsive-16by9">
                        
                      </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="materi4">
                      <div class="embed-responsive embed-responsive-16by9">
                        
                      </div>
                    </div>
                    
                    <div role="tabpanel" class="tab-pane" id="materi5">
                      <div class="embed-responsive embed-responsive-16by9">
                        
                      </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="materi6">
                      <div class="embed-responsive embed-responsive-16by9">
                        
                      </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="materi7">
                      <div class="embed-responsive embed-responsive-16by9">
                        
                      </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="praktik1">
                      <h2>Download Modul & Studi Kasus</h2>
                        <span>Silahkan Download Modul dan Kerjakan Studi Kasus :</span>
                        <form style="margin-bottom: 5px;" method="get" action="<?php echo e(url(Storage::url('public/files/STUDI-KASUS.pdf'))); ?>">
                          <button class="btn btn-default" type="submit">Modul Praktikum</button>
                        </form>
                        <form method="get" action="<?php echo e(url(Storage::url('public/files/STUDI-KASUS.pdf'))); ?>">
                          <button class="btn btn-default" type="submit">Studi Kasus</button>
                        </form>

                      <h2>Unggah File Latihan Praktik</h2>
                      <span>
                        Silahkan unggah file Cisco Packet Tracer (.pkt) yang anda buat <br> <b>(Anda hanya bisa mengunggah satu kali)</b>
                      </span>
                      <form action="<?php echo e(url('upload')); ?>" method="post" class="form-signin" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" class="form-control" name='materi' value="ipaddress" id="nama">
                        <div class="form-group">
                          <input type="file" class="form-control" name='file' id="nama">
                        </div>
                        <div class="menu-card-class">
                          <div class="row">
                            <?php if($files != NULL): ?>
                              <div class="col-md-6" style="text-align: left;">
                                <a href="<?php echo e(url(Storage::url($files->lokasi))); ?>"><?php echo e($files->nama); ?></a>
                              </div>
                            <?php endif; ?>

                            <div class="col-md-6">
                              <input type="submit" name="submit" class="btn btn-success" value="Unggah">
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teddy\Documents\Code\netacad\netacad\resources\views/ipaddress.blade.php ENDPATH**/ ?>