<?php
    $classes = 'p-4 bg-white/5 rounded-xl border border-transparent hover:border-blue-800 group transition-colors duration-300';
?>

<div <?php echo e($attributes->merge(['class' => $classes])); ?>>
    <?php echo e($slot); ?>

</div><?php /**PATH D:\Laravel\pixel-positions\resources\views/components/panel.blade.php ENDPATH**/ ?>