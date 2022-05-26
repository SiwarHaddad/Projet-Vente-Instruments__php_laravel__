<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href=<?php echo e(URL::asset("images/icon.png")); ?>/>
    <link rel="stylesheet" href=<?php echo e(URL::to("css/test.css")); ?>/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href=<?php echo e(URL::to("css/util.css")); ?>>
	<link rel="stylesheet" type="text/css" href=<?php echo e(URL::to("css/main.css")); ?>>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>

    <!-- content -->
        <?php echo $__env->yieldContent('content'); ?>

    <!-- Footer -->

    <footer class="bg3 p-t-75 p-b-32">
        <div class="container">
            <p class="stext-107 cl6 txt-center">
                Copyright &copy;2022 All rights reserved | Siwar Haddad
            </p>
        </div>
    </footer>
</body>
</html>
<?php /**PATH C:\wamp64\www\MUSIC_store_V2\resources\views/template_form.blade.php ENDPATH**/ ?>