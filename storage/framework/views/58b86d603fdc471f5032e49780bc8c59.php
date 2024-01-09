<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="table table-striped">
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>

                </tr>

                </thead>
                <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><a href="/users/<?php echo e($user->id); ?>"><?php echo e($user ->id); ?></td>
                        <td> <?php echo e($user ->name); ?></td>
                        <td> <?php echo e($user->email); ?></td>
                        <td><a href="<?php echo e(route('users.edit', $user->id)); ?>" class="btn btn-warning">Edit</a> </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>


        </div>

    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script>

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/laravelg5/resources/views/users/index.blade.php ENDPATH**/ ?>