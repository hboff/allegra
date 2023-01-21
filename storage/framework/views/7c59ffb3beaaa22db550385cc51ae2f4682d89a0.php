<?php switch($status):
case ('de'): ?>
    <?php
    $i=0;
    ?>
    <?php $__currentLoopData = $ort; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orte): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($i++ < 50): ?>
    <a class="link-dark" href="/<?php echo e($orte->ortschweiz); ?>/immobilienbewertung">Immobilienbewertung <?php echo e($orte['ortschweiz']); ?></a>
    <?php else: ?>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php break; ?>
 
<?php case ('at'): ?>
    <?php
    $i=0;
    ?>
    <?php $__currentLoopData = $ortat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orte): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($i++ < 50): ?>
    <a class="link-dark" href="/<?php echo e($orte->ort); ?>/immobilienbewertung">Immobilienbewertung <?php echo e($orte['ort']); ?></a>
    <?php else: ?>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php break; ?>
 
<?php default: ?>

<?php endswitch; ?><?php /**PATH C:\xampp\htdocs\allegra\allegra-1\resources\views/partials/_orte.blade.php ENDPATH**/ ?>