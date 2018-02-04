<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Logbook Info</div>

                    <div class="panel-body">


                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nama / PT</label>
                            
                              <?php echo e($logbook->Marketing->nama_pelanggan); ?>



                            

                        </div>


                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Alamat</label>
                            <?php echo e($logbook->Marketing->alamat); ?>

                        </div>


                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Impact</label>
                            <?php echo e($logbook->impact); ?>

                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Source Problem</label>
                            <?php echo e($logbook->source_problem); ?>

                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Segment</label>
                            <?php echo e($logbook->segment); ?>

                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Descripton</label>
                            <?php echo e($logbook->description); ?>

                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Solved By</label>
                          <label class="label label-success"><?php echo e($logbook->solved_by); ?></label>  
                        </div>





                        <div class="form-group">
                            <a href="<?php echo e(route('logbook.edit',$logbook->id)); ?>" class="btn btn-warning btn-sm">Update</a>
                            <a href="<?php echo e(route('logbook.index')); ?>" class="btn btn-danger btn-sm">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>