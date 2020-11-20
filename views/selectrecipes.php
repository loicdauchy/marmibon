<?php ob_start(); ?>




<div class="row">
<!-- Single Best Receipe Area -->
<?php foreach($searchine as $Rr){ ?>

<div class="col-12 col-sm-6 col-lg-4">
<div class="single-best-receipe-area mb-30">
<img src="<?=$Rr['img_recette'] ?>" alt="">
<div class="receipe-content">
<a href=<?='?recipeID='.$Rr['Id_recette'] ?>>
<h4><?=$Rr['Name_recette'] ?></h5>

</a>
</div>
</div>
</div>

<?php } ?>
</div>

<?php $title = 'Recherche'; ?>
<?php $content = ob_get_clean(); ?>

<?php require('templates/template.php'); ?>