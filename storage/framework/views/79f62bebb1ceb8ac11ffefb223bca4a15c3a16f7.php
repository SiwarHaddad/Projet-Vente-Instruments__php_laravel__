<?php $__env->startSection('title'); ?>
    Ajout Instrument
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container_f">
        <form action=<?php echo e(route('Instrument.store')); ?> method="post" enctype="multipart/form-data" >
            <?php echo csrf_field(); ?>
            <h3>Ajout d'un instrument</h3><hr><br>

            <div class="form-group">
                <label for="libelleInstrument"><b>Libelle</b></label>
                <input type="text"  name="libelleInstrument" class="form-control <?php $__errorArgs = ['libelleInstrument'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('libelleInstrument')); ?>" id="libelleInstrument"  placeholder="Libelle de l'instrument" >
                <?php $__errorArgs = ['libelleInstrument'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div><br/>

            <div class="form-group">
                <label for="descriptionInstrument"><b>Description</b></label>
                <textarea class="form-control <?php $__errorArgs = ['descriptionInstrument'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="descriptionInstrument" id="descriptionInstrument"   rows="3" placeholder="Description">
                    <?php echo e(old('descriptionInstrument')); ?>

                </textarea>
                <?php $__errorArgs = ['descriptionInstrument'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div><br>

            <div class="form-group">
                <label for="categorieInstrument"><b> Catégorie</b></label>
                <select class="form-control" name="categorieInstrument" id="categorieInstrument">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($categorie->idCategorie); ?>"><?php echo e($categorie->libelleCategorie); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div><br>

            <div class="form-group">
                <label for="marqueInstrument"><b>Marque</b></label>
                <input type="text"  name="marqueInstrument" class="form-control" id="marqueInstrument" placeholder="Marque de l'instrument" >
            </div><br/>

            <div class="form-group">
                <label for="imageInstrument"><b>Image d'instrument</b></label><br/>
                <input type="file" name="choosefile" class="form-control-file" id="imageInstrument" >
            </div><br/><br/>

            <div class="form-group">
                <label for="quantiteDispoInstrument"><b>Quantité disponible</b></label>
                <input type="number" min="1" name="quantiteDispoInstrument" class="form-control  <?php $__errorArgs = ['quantiteDispoInstrument'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('quantiteDispoInstrument')); ?>"id="quantiteDispoInstrument" placeholder="Quantité disponible" >
                <?php $__errorArgs = ['quantiteDispoInstrument'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div><br/>

            <div class="form-group">
                <label for="prixInstrument"><b>Prix</b></label>
                <input type="text"  name="prixInstrument" class="form-control <?php $__errorArgs = ['prixInstrument'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('prixInstrument')); ?>" id="prixInstrument" placeholder="Prix" >
                <?php $__errorArgs = ['prixInstrument'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div><br/>

            <button type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                Ajouter
            </button>
        </form>
    </div> <br><br><br><br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\MUSIC_store_V2\resources\views/Instrument/new.blade.php ENDPATH**/ ?>