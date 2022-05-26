<?php $__env->startSection('title'); ?>
    Instruments
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="bg0 m-t-23 p-b-140">
        <section class="bg0 p-t-23 p-b-140">
            <div class="container">
                <div class="flex-w flex-sb-m p-b-52">
                    <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                        <a href="<?php echo e(route('Instrument.index')); ?>">
                            <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 " data-filter="*">
                                Tous les produits
                            </button>
                        </a>

                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href=<?php echo e(route('Instrument.index', ['categorie' => $categorie->idCategorie])); ?>>
                                <button type="button" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 " data-filter=".<?php echo e($categorie->libelleCategorie); ?>" >
                                    <?php echo e($categorie->libelleCategorie); ?>

                                </button>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>

                    <div class="flex-w flex-c-m m-tb-10">
                        

                        <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer  trans-04 m-tb-4 js-show-search">
                            &emsp;
                            <form action=<?php echo e(route('Instrument.search')); ?> method="POST" class="d-flex">
                                <?php echo csrf_field(); ?>
                                <input type="text" name="search" id="search"  placeholder="Rechercher">

                                <button type="submit">
                                    <i class="icon-search hov-btn3 p-2 cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <?php if(request()->input()): ?>
                    <h3><?php echo e($instruments->count()); ?> résultat(s) pour "<?php echo e(request()->search); ?>"</h3><br><br>
                <?php endif; ?>

                <div class="row isotope-grid">
                    <?php $__currentLoopData = $instruments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instrument): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women" >
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-pic hov-img0">

                                    <img src=<?php echo e(asset("images/instruments/$instrument->imageInstrument")); ?> alt=<?php echo e($instrument->imageInstrument); ?>>

                                    <a href="<?php echo e(route('Instrument.show', $instrument->idInstrument)); ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                        Details
                                    </a>
                                </div>

                                
                                    <div class="flex-r p-t-3">
                                        <a href="<?php echo e(route('Instrument.edit', $instrument->idInstrument)); ?>" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11  js-show-cart">
                                            <span class="iconify" data-icon="eva:edit-2-fill"></span>
                                        </a>

                                        <form action="<?php echo e(route('Instrument.destroy', $instrument->idInstrument)); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>

                                            <button type="submit" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11  js-show-cart">
                                                <span class="iconify" data-icon="fluent:delete-dismiss-20-filled"></span>
                                            </button>
                                        </form>

                                    </div>


                                <div class="block2-txt flex-w flex-t p-t-14">
                                    <div class="block2-txt-child1 flex-col-l ">
                                        <div class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                            <?php echo e(str_replace('-',' ',$instrument->libelleInstrument)); ?>

                                        </div>

                                        <span class="stext-105 cl3">
                                            <?php echo e($instrument->prixInstrument." TND"); ?>

                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\MUSIC_store_V2\resources\views/Instrument/search.blade.php ENDPATH**/ ?>