<?php $__env->startSection('title'); ?>
    Inscription
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container_f">
        <form action="<?php echo e(route('User.SignUp')); ?>" method="post"  onSubmit="return validation(this)" enctype="multipart/form-data" >
            <?php echo csrf_field(); ?>

            <h3>Inscription</h3><hr><br>

            <div class="form-group">
                <label for="nomUser"><b>Nom</b></label>
                <input type="text"  name="nomUser" class="form-control <?php $__errorArgs = ['nomUser'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nomUser" value="<?php echo e(old('nomUser')); ?>" placeholder="votre nom" >
                <?php $__errorArgs = ['nomUser'];
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
                <label for="prenomUser"><b>Prénom</b></label>
                <input type="text"  name="prenomUser" class="form-control <?php $__errorArgs = ['prenomUser'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="prenomUser" value="<?php echo e(old('prenomUser')); ?>" placeholder="votre prenom" >
                <?php $__errorArgs = ['prenomUser'];
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
                <label for="email"><b>Email</b></label>
                <input type="email"  name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" value="<?php echo e(old('email')); ?>" placeholder="votre adresse mail" >
                <?php $__errorArgs = ['email'];
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
                <label for="telUser"><b>Telephone</b></label>
                <input type="text"  name="telUser" class="form-control <?php $__errorArgs = ['telUser'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="telUser" value="<?php echo e(old('telUser')); ?>" placeholder="votre tel" >
                <?php $__errorArgs = ['telUser'];
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
                <label for="adresseUser"><b>Adresse</b></label>
                <textarea class="form-control  <?php $__errorArgs = ['adresseUser'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="adresseUser" id="adresseUser" rows="3" placeholder="votre adresse" >
                    <?php echo e(old('adresseUser')); ?>

                </textarea>
                <?php $__errorArgs = ['adresseUser'];
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
                <label for="password"><b>Mot de passe</b></label>
                <input type="password"  name="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password" value="<?php echo e(old('password')); ?>" placeholder="votre mot de passe" >
                <?php $__errorArgs = ['password'];
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
                <label for="password_confirmation"><b>Confirmer mot de passe</b></label>
                <input type="password"  name="password_confirmation" class="form-control" id="password_confirmation" placeholder="votre mot de passe" >
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

<?php echo $__env->make('template_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\MUSIC_store_V2\resources\views/User/signUp.blade.php ENDPATH**/ ?>