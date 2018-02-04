<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Management</div>
                <div class="panel-body">


                  <table class="table table-bordered table-striped table-condensed">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                      <tr>
                        <td><?php echo e($user->name); ?></td>
                        <td><?php echo e($user->email); ?></td>
                        <td><?php echo e($user->created_at); ?></td>
                        <td>
                          <a href="<?php echo e(route('users.show',$user->id)); ?>" class="btn btn-info btn-sm">Show</a>
                          <a href="<?php echo e(route('users.edit',$user->id)); ?>" class="btn btn-success btn-sm">Edit</a>
                        <form  style='display : inline-block' action="<?php echo e(route('users.destroy',$user->id)); ?>" method="POST">
                          <?php echo e(csrf_field()); ?>

                          <?php echo e(method_field('DELETE')); ?>

                          <button type="submit" class="btn btn-danger btn-sm" onclick="confirmation()">Delete</button>
                        </form>
                        </td>
                      </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                  <a href="<?php echo e(route('users.create')); ?>" class="btn btn-primary btn-medium pull-right"> Create User</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<script>
        function confirmation(){
          alert('Data telah dihapus');
        }
        // $(".delete").on("submit", function(){
        // return confirm("Do you want to delete this item?");
    // });
</script>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>