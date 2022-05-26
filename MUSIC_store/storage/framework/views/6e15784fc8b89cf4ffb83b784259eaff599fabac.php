<?php $__env->startSection('title'); ?>
    Ajout categorie
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container_f">
        <form action="<?php echo e(route('Categorie.store')); ?>" method="post" enctype="multipart/form-data" >
            <?php echo csrf_field(); ?>
            <h3>Ajout d'une categorie</h3><hr><br>

            <div class="form-group">
                <label for="libelleCategorie"><b>Libelle</b></label>
                <input type="text"  name="libelleCategorie" class="form-control" id="libelleCategorie" placeholder="donner un libelle pour votre categorie" required>
            </div><br/>

            <div class="form-group">
                <label for="imageCategorie"><b>Image de categorie</b></label><br/>
                <input type="file" name="choosefile" class="form-control-file" id="imageCategorie" required>
            </div><br/><br/>

            <button type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                Ajouter
            </button>
        </form>
    </div>  <br><br><br><br>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('template_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\MUSIC_store_V2\resources\views/Categorie/new.blade.php ENDPATH**/ ?>