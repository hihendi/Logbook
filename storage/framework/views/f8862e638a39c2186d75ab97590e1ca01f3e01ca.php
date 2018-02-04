<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Logbook</div>

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
                              action="<?php echo e(route('logbook.update', $logbook->id)); ?>">
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('PATCH')); ?>


                            <div class="form-group<?php echo e($errors->has('marketing') ? ' has-error' : ''); ?>">
                                <label for="marketing" class="col-md-4 control-label">Nama Pelanggan</label>

                                <div class="col-md-6">
                                  <select class="form-control" name="marketing_id" id="marketing_id">
                                        <option value selected='selected'><?php echo e($logbook->Marketing->nama_pelanggan); ?></option>
                                      <?php $__currentLoopData = $marketing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($key); ?>"><?php echo e("$value"); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>


                                    <?php if($errors->has('marketing')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('marketing')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                              </div>

                              <div class="form-group<?php echo e($errors->has('impact') ? ' has-error' : ''); ?>">
                                  <label for="impact" class="col-md-4 control-label">Impact</label>

                                <div class="col-md-6">

                                    <input id="impact" type="text" class="form-control" name="impact"
                                           value="<?php echo e($logbook->impact); ?>" placeholder="Masukkan Impact"
                                           required autofocus>

                                    <?php if($errors->has('impact')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('impact')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                              </div>

                              <div class="form-group<?php echo e($errors->has('segment ') ? ' has-error' : ''); ?>">
                                <label for="segment" class="col-md-4 control-label">Segment</label>

                                <div class="col-md-6">
                                  <select class="form-control" name="segment" id="segment">
                                        
                                        
                                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                          <option value="<?php echo e(old($users->name)); ?>"selected="selected"><?php echo e($users->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                  </select>

                                    <?php if($errors->has('segment')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('segment')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('source_problem') ? ' has-error' : ''); ?>">
                                <label for="source_problem" class="col-md-4 control-label">Source Problem</label>

                                <div class="col-md-6">
                                  <select class="form-control" name="source_problem" id="source_problem">
                                        <option value="" selected='selected'><?php echo e($logbook->source_problem); ?></option>
                                        <option value="Connection/Internet">Connection/Internet</option>
                                        <option value="Network Outage">Network Outage</option>
                                        <option value="Device Outage">Device Outage</option>

                                  </select>

                                    <?php if($errors->has('source_problem')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('source_problem')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
                                <label for="description" class="col-md-4 control-label">Descripton</label>

                              <div class="col-md-6">

                                <textarea name="description" rows="8" cols="80" id="description"
                                placeholder="Masukkan Descripton" class="form-control"></textarea>
                                

                                  <?php if($errors->has('description')): ?>
                                      <span class="help-block">
                                      <strong><?php echo e($errors->first('description')); ?></strong>
                                  </span>
                                  <?php endif; ?>
                              </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('solved_by') ? ' has-error' : ''); ?>">
                                <label for="solved_by" class="col-md-4 control-label">Solved By</label>

                                <div class="col-md-6">
                                  <select class="form-control" name="solved_by" id="solved_by">
                                        <option value="" selected='selected'><?php echo e($logbook->solved_by); ?></option>
                                        <option value="NOC">NOC</option>
                                        <option value="Teknisi Internet">Teknisi Internet</option>
                                        <option value="User">User</option>

                                  </select>

                                    <?php if($errors->has('solved_by')): ?>
                                        <span class="help-block">
                                        <strong><?php echo e($errors->first('solved_by')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>

                                    <a class="btn btn-danger" href="<?php echo e(route('logbook.index')); ?>">
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