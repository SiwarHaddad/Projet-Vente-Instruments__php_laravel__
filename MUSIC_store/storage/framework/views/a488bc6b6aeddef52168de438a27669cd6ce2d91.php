<?php $__env->startSection('title'); ?>
    Modification categorie
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container_f">
        <form action="<?php echo e(route('Categorie.update', $categorie->idCategorie)); ?>" method="post" enctype="multipart/form-data" >
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>

            <h3>Modification d'une categorie</h3><hr><br>

            <div class="form-group">
                <label for="libelleCategorie"><b>Libelle</b></label>
                <input type="text"  name="libelleCategorie" class="form-control" id="libelleCategorie" value=<?php echo e($categorie->libelleCategorie); ?> placeholder="donner un libelle pour votre categorie" required>
            </div><br/>



            <div class="form-group">
                <label for="imageCategorie"><b>Image de categorie</b></label>

                <div class="block1 wrap-pic-w" style="width:50%;margin:auto 0">
                    <img src=<?php echo e(URL::asset("images/categories/{$categorie->imageCategorie}")); ?>  alt=<?php echo e($categorie->imageCategorie); ?>>
                </div><br>

                <input type="hidden" name="imgCategorie" value=<?php echo e($categorie->imageCategorie); ?>>
                <input type="file" name="choosefile" class="form-control-file" id="imageCategorie"  value=<?php echo e($categorie->imageCategorie); ?>    >
            </div><br/><br/>

            <button type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                Modifier
            </button>
        </form>
    </div> <br><br><br><br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\MUSIC_store_V2\resources\views/Categorie/edit.blade.php ENDPATH**/ ?>