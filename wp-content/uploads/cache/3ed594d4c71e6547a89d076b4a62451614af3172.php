<div class="conteiner">
    <h3>Module: Example <?php echo e($data->ex1); ?></h3>
    <?php $__currentLoopData = $data->example; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($item->post_title); ?>

        <?php echo $item->post_content; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php echo e(Page::filterExample()); ?>

    <?php echo e(isset($data->logo['url']) ? $data->logo['url'] : ''); ?>


    
    <?php (new \Sober\Controller\Blade\Debugger(get_defined_vars())); ?>
</div>