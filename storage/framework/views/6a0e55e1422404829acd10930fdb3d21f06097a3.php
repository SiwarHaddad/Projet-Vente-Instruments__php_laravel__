<?php $__env->startSection('title'); ?>
    Panier
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Shoping Cart -->
        <form class="bg0 p-t-75 p-b-85">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                        <div class="m-l-25 m-r--38 m-lr-0-xl">
                            <div class="wrap-table-shopping-cart">
                                <table class="table-shopping-cart">
                                    <tr class="table_head">
                                        <th class="column-1">Produit</th>
                                        <th class="column-2"></th>
                                        <th class="column-2"></th>
                                        <th class="column-3" colspan="2">Prix</th>
                                        <th class="column-4">Quantite</th>
                                        <th class="column-5" >Total</th>
                                        <th class="column-2"></th>
                                    </tr>

                                    <?php $__currentLoopData = $panierI; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $panier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="table_row">
                                            <td class="column-1">
                                                <div class="how-itemcart1">
                                                    <img src="images/instruments/<?php echo e($panier->imageInstrument); ?>" alt="<?php echo e($panier->imageInstrument); ?>">
                                                </div>
                                            </td>
                                            <td class="column-2"><?=str_replace('-',' ',{{$panier->libelleInstrument}})?></td>
                                            <td>&emsp;</td>
                                            <td class="column-3" colspan="2"><?php echo e($panier->prixInstrument." TND"); ?></td>
                                            <td class="column-4">
                                                <div class="flex-w flex-r-m p-b-10">
                                                    <div class="size-204 flex-w flex-m respon6-next">
                                                        <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                                            <input  type="text" value="<?php echo e($panier->quantiteInstrument); ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="column-5">
                                                <?php $total += {{$panier->imageInstrument}} * {{$panier->quantite}}; ?>
                                                <?php echo e($panier->imageInstrument); ?> * <?php echo e($panier->quantite); ?>' TND'
                                            </td>
                                            <td>
                                            
                                            </td>
                                            <td>
                                                <a href="<?php echo e(routedeleteitems$c["idInstrument"]); ?>" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11  js-show-cart">
                                                    <span class="iconify" data-icon="fluent:delete-dismiss-20-filled"></span>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                            </div>

                            <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                                <a href=<?php echo e(route('Instrument.index')); ?>>
                                    <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                        Poursuivre l'achat
                                    </button>
                                </a>

                                <a href="<?php echo e(route('cart.vider')); ?>">
                                    <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                        vider Panier
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                        <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                            <h4 class="mtext-109 cl2 p-b-30">
                                Totals Achat
                            </h4>

                            <div class="flex-w flex-t p-t-27 p-b-33">
                                <div class="size-208">
                                    <span class="mtext-101 cl2">
                                        Total:
                                    </span>
                                </div>

                                <div class="size-209 p-t-1">
                                    <span class="mtext-110 cl2">
                                        <?=$total.' TND'?>
                                    </span>
                                </div>
                            </div>
                            <button type="button" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1">
                                Passer la commande
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Panier</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Commande passée
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <a href="index.php?controller=Instrument">
                        <button type="button" class="btn btn-primary" >Page d'accueil</button>
                    </a>
                </div>
            </div>
            </div>
        </div>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\MUSIC_store_V2\resources\views/Cart/Cart.blade.php ENDPATH**/ ?>