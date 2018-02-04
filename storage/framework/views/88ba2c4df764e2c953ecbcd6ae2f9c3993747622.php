<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4><strong>Create Data Marketing</strong></h4></div>

                    <div class="panel-body">
                        <!-- Display Validation Errors -->
                        <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>


                        <form class="form-horizontal" role="form" method="POST"
                              action="<?php echo e(route('marketing.update', $marketing->id)); ?>">
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('PATCH')); ?>



                              <div class="form-group<?php echo e($errors->has('impact') ? ' has-error' : ''); ?>">
                                  <label for="nama_pelanggan" class="col-md-4 control-label">Nama Pelanggan/PT</label>

                                <div class="col-md-6">

                                    <input id="nama_pelanggan" type="text" class="form-control" name="nama_pelanggan"
                                           value="<?php echo e($marketing->nama_pelanggan); ?>" placeholder="Masukkan Nama Pelanggan/PT "
                                           required autofocus>

                                    <?php if($errors->has('nama_pelanggan')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('nama_pelanggan')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                              </div>

                              <div class="form-group<?php echo e($errors->has('impact') ? ' has-error' : ''); ?>">
                                  <label for="alamat" class="col-md-4 control-label">Alamat</label>

                                <div class="col-md-6">

                                    <input id="alamat" type="text" class="form-control" name="alamat"
                                           value="<?php echo e($marketing->alamat); ?>" placeholder="Masukkan Alamat Pelanggan"
                                           required autofocus>

                                    <?php if($errors->has('alamat')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('alamat')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                              </div>

                              <div class="form-group<?php echo e($errors->has('segment ') ? ' has-error' : ''); ?>">
                                <label for="paket_langganan" class="col-md-4 control-label">Paket Berlangganan</label>

                                <div class="col-md-6">
                                  <select class="form-control" name="paket_langganan" id="paket_langganan">
                                        <option value="" selected='selected'>Pilih Paket Berlangganan</option>
                                        <option value="10MB-Bronze">1MB-Bronze</option>
                                        <option value="50MB-Bronze">5MB-Bronze</option>
                                        <option value="100MB-Bronze">10MB-Bronze</option>
                                        <option value="10MB-Silver">10MB-Silver</option>
                                        <option value="50MB-Silver">50MB-Silver</option>
                                        <option value="10MB-Gold">10MB-Gold</option>
                                        <option value="50MB-Gold">50MB-Gold</option>
                                        <option value="100MB-Gold">100MB-Gold</option>
                                        <option value="200MB-Gold">200MB-Gold</option>

                                  </select>

                                    <?php if($errors->has('paket_langganan')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('paket_langganan')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>

                                    <a class="btn btn-danger" href="<?php echo e(route('marketing.index')); ?>">
                                        Cancel
                                    </a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>