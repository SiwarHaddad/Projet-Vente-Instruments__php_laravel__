<?php $__env->startSection('title'); ?>
    Home
<?php $__env->stopSection(); ?>

<?php if(session()->has('info')): ?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <?php echo e(session('info')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<?php $__env->startSection('content'); ?>
    <div class="sec-banner bg0 p-t-80 p-b-50">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                        <div class="block1 wrap-pic-w">
                            <img src=<?php echo e(URL::asset("images/categories/$categorie->imageCategorie")); ?> alt="<?php echo e($categorie->imageCategorie); ?>">
                            <a href=<?php echo e(route('Instrument.index', ['categorie' => $categorie->idCategorie])); ?> class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                                <div class="block1-txt-child1 flex-col-l">
                                    <span class="block1-name ltext-102 trans-04 p-b-8">
                                        <?php echo e($categorie->libelleCategorie); ?>

                                    </span>
                                </div>

                                <div class="block1-txt-child2 p-b-4 trans-05">
                                    <div class="block1-link stext-101 cl0 trans-09">
                                        Consulter
                                    </div>
                                </div>
                            </a>
                            <div class="flex-r p-t-3">
                                <?php if(Auth::check() && Auth()->user()->isAdmin): ?>
                                <a href="<?php echo e(route('Categorie.edit', $categorie->idCategorie)); ?>" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11  js-show-cart">
                                    <span class="iconify" data-icon="eva:edit-2-fill"></span>
                                </a>

                                <form action="<?php echo e(route('Categorie.destroy', $categorie->idCategorie)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <button type="submit"  class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11  js-show-cart">
                                        <span class="iconify" data-icon="fluent:delete-dismiss-20-filled"></span>
                                    </button>
                                </form>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if(Auth::check() && Auth()->user()->isAdmin): ?>
                    <a href="<?php echo e(route('Categorie.create')); ?>">
                        <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                            Ajouter une categorie
                        </button>
                    </a><br/><br/>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\MUSIC_store_V2\resources\views/Categorie/index.blade.php ENDPATH**/ ?>