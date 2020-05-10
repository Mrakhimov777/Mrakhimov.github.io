

<?php $__env->startSection('content'); ?>
    <div class="row">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-md-4">
                    <h2><?php echo e($post->title); ?></h2>
                    <p><?php echo e($post->intro); ?></p>
                    <p><a href="/posts/<?php echo e($post->alias); ?>" class="btn btn-default">Читать далее</a> </p>
                    <p><a href="/posts/<?php echo e($post->alias); ?>/edit" class="btn btn-primary">Редактировать</a> </p>
                    <form action="/posts/<?php echo e($post->alias); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <?php echo method_field('delete'); ?>

                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\blog\resources\views/index.blade.php ENDPATH**/ ?>