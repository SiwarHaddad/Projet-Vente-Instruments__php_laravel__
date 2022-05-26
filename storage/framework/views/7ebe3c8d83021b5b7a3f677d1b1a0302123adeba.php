<?php $__env->startSection('title'); ?>
    Activités
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="sec-banner bg0 p-t-80 p-b-50">
    <div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">num commande</th>
            <th scope="col">date</th>
            <th scope="col">facture</th>
        </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $factures; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($facture->numCommande); ?></td>
                    <td><?php echo e($facture->dateCommande); ?></td>
                    <td><a href="<?php echo e(route('Facture.download',$facture->facture)); ?>"><?php echo e($facture->facture); ?></a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\MUSIC_store_V2\resources\views/Facture/liste.blade.php ENDPATH**/ ?>