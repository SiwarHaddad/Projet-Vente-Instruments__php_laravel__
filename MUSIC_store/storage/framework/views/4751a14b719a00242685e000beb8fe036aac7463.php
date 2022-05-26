<?php $__env->startSection('title'); ?>
    Connexion
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(session()->has('message')): ?>
        <h1> <?php echo e(session('message')); ?> </h1>
    <?php endif; ?>
    

    <div class="container_f">
        <form action="" method="post">
            <?php echo csrf_field(); ?>

            <h3>Connexion</h3><hr><br>

            <div class="form-group">
                <label for="email"><b>Email</b></label>
                <input type="email"  name="email" class="form-control" id="email" placeholder="donner votre e-mail" required>
            </div><br/>

            <div class="form-group">
                <label for="password"><b>Mot de passe</b></label>
                <input type="password"  name="password" class="form-control" id="password" placeholder="votre mot de passe" required>
            </div><br/>

            <button type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                Se  connecter
            </button>

        </form>

        
    </div>  <br><br><br><br><br><br>

    <!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Panier</h5>
				<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Mot de passe ou/et email invalide(s)
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>
				<a href="index.php?controller=Client&action=login">
					<button type="button" class="btn btn-primary" >Se connecter</button>
				</a>
			</div>
		</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\MUSIC_store_V2\resources\views/User/SignIn.blade.php ENDPATH**/ ?>