<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">User Info</div>

                    <div class="panel-body">


                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <?php echo e($user->name); ?>

                        </div>


                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">E-mail</label>
                            <?php echo e($user->email); ?>

                        </div>


                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Roles</label>
                            <?php if(!empty($user->roles)): ?>
                                <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <label class="label label-success"><?php echo e($role->display_name); ?></label>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <a href="<?php echo e(route('users.index')); ?>" class="btn btn-danger btn-sm">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>