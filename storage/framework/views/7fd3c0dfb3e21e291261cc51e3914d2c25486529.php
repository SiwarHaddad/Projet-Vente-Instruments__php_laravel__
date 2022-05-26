<?php $__env->startSection('title'); ?>
    Inscription
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container_f">
        <form action="<?php echo e(route('User.signUp')); ?>" method="post"  onSubmit="return validation(this)" enctype="multipart/form-data" >
            <h3>Inscription</h3><hr><br>

            <div class="form-group">
                <label for="nomUser"><b>Nom</b></label>
                <input type="text"  name="nomUser" class="form-control" id="nomUser" placeholder="votre nom" required>
            </div><br/>

            <div class="form-group">
                <label for="prenomUser"><b>Prénom</b></label>
                <input type="text"  name="prenomUser" class="form-control" id="prenomUser" placeholder="votre prenom" required>
            </div><br/>

            <div class="form-group">
                <label for="email"><b>Email</b></label>
                <input type="email"  name="email" class="form-control" id="email" placeholder="votre adresse mail" required>
            </div><br/>

            <div class="form-group">
                <label for="adresseUser"><b>Adresse</b></label>
                <textarea class="form-control" name="adresseUser" id="adresseUser" rows="3" placeholder="votre adresse" required></textarea>
            </div><br>

            <div class="form-group">
                <label for="password"><b>Mot de passe</b></label>
                <input type="password"  name="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="votre mot de passe" required>
            </div><br/>

            <div class="form-group">
                <label for="ConfirMdpClient"><b>Confirmer mot de passe</b></label>
                <input type="password"  name="ConfirmMdpClient" class="form-control" id="ConfirmMdpClient" aria-describedby="emailHelp" placeholder="votre mot de passe" required>
            </div><br/>

            <button type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
                S'inscrire
            </button>
        </form>
        <br><a href="<?php echo e(route('User.getSignIn')); ?>"><b>Déjà incris</b></a>
    </div>  <br><br><br><br>


    <!-- javascript -->
    <script language="javascript">
        // correspondance des deux mots de passe
        function validation(f) {
            if (f.mdpClient.value != f.ConfirmMdpClient.value) {
                alert('Les deux mots de passe saisis ne sont pas les mêmes');
                f.mdpClient.focus();
                return false;
            }
            else if (f.mdpClient.value == f.ConfirmMdpClient.value) {
                return true;
            }
            else {
                f.mdpClient.focus();
                return false;
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\MUSIC_store_V2\resources\views/User/SignUp.blade.php ENDPATH**/ ?>