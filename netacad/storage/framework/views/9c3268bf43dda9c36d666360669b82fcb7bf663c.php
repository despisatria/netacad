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
                <li><a href="result.php">Hasil Evaluasi</a></li>
                <li class="active">IP Addressing</li>                     
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
            <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <tr>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Nilai</th>
                </tr>
              </thead>
              <tbody>
                <?php if($jumlahEvaluasi != 0): ?>
                  <?php $__currentLoopData = $evaluasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    
                    <td><?php echo e($item->user->nim); ?></td>
                    <td><?php echo e($item->user->name); ?></td>
                    <td><?php echo e($item['nilai']); ?></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <td colspan="3">Data Empty</td>
                <?php endif; ?>
              </tbody>
              <!-- <tfoot>
                <tr>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Nilai</th>
                </tr>
              </tfoot> -->
            </table>
          </div>    
        </div>
      </div>
    </div>
  </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teddy\Documents\Code\netacad\netacad\resources\views/result-ipaddress.blade.php ENDPATH**/ ?>