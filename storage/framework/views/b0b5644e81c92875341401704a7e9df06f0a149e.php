<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Data Marketing Info</div>

                    <div class="panel-body">


                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nama / PT</label>
                            
                              <?php echo e($marketing->nama_pelanggan); ?>



                            

                        </div>


                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Alamat</label>
                            <?php echo e($marketing->alamat); ?>

                        </div>


                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Paket Berlangganan</label>
                            <?php echo e($marketing->paket_langganan); ?>

                        </div>

                        <div class="form-group">
                            <a href="<?php echo e(route('marketing.edit',$marketing->id)); ?>" class="btn btn-warning btn-sm">Update</a>
                            <a href="<?php echo e(route('marketing.index')); ?>" class="btn btn-danger btn-sm">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>