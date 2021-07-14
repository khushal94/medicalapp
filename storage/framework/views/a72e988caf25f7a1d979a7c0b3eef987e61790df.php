<?php $__env->startSection('title'); ?>
<?php echo e(__('sentence.All Drugs')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?>
<?php if(session('success')): ?>
<div class="alert alert-success">
    <?php echo e(session('success')); ?>

</div>
<?php endif; ?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-9">
                <h6 class="m-0 font-weight-bold text-primary w-75 p-2"><?php echo e(__('sentence.All Drugs')); ?></h6>
            </div>
            <div class="col-3">
                <div class="text-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <?php echo e(__('sentence.Import Drug')); ?></button>
                    <a href="<?php echo e(route('drug.create')); ?>" class="btn btn-primary"><i class="fa fa-plus"></i>
                        <?php echo e(__('sentence.Add Drug')); ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th><?php echo e(__('sentence.Trade Name')); ?></th>
                        <th><?php echo e(__('sentence.Generic Name')); ?></th>
                        <th><?php echo e(__('sentence.Note')); ?></th>
                        <th><?php echo e(__('sentence.Rate')); ?></th>
                        <th><?php echo e(__('sentence.Type of Sell')); ?></th>
                        <th><?php echo e(__('sentence.Manufacturer')); ?></th>
                        <th><?php echo e(__('sentence.Country of origin')); ?></th>
                        <th><?php echo e(__('sentence.Salt')); ?></th>
                        <th><?php echo e(__('sentence.Uses of (Medicine name)')); ?></th>
                                               
                        <th class="text-center"><?php echo e(__('sentence.Actions')); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $drugs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $drug): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($drug->id); ?></td>
                        <td><?php echo e($drug->trade_name); ?></td>
                        <td><?php echo e($drug->generic_name); ?></td>
                        <td><?php echo e($drug->note); ?></td>
                        <td><?php echo e($drug->rate); ?></td>
                        <td><?php echo e($drug->type_sell); ?></td>
                        <td><?php echo e($drug->manufacturer); ?></td>
                        <td><?php echo e($drug->country_origin); ?></td>
                        <td><?php echo e($drug->salt); ?></td>
                        <td><?php echo e($drug->uses); ?></td>
                        
                        <td class="text-center">
                            <a href="<?php echo e(url('drug/edit/'.$drug->id)); ?>" class="btn btn-warning btn-circle btn-sm"><i
                                    class="fa fa-pen"></i></a>
                            <a href="<?php echo e(url('drug/delete/'.$drug->id)); ?>" class="btn btn-danger btn-circle btn-sm"><i
                                    class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="<?php echo e(route('drug.import')); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import Excel File</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="">Please Upload File</label>
                    <input type="file" name="file" accept="xlsx," class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/doctor1/resources/views/drug/all.blade.php ENDPATH**/ ?>