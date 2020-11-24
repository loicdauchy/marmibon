<?php ob_start(); ?>


<?php $title = "Admin"; ?>
    <?php $content = ob_get_clean(); ?>

<?php require('templates/template.php'); ?>