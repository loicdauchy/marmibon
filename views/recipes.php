<?php $title = 'Toute les recettes'; ?>

<?php ob_start(); ?>



<section class="best-receipe-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Toute nos recettes</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Best Receipe Area -->
                <?php foreach($allRecipe as $result){  ?>

                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-best-receipe-area mb-30">
                        <img src="<?=$result['img_recette'] ?>" alt="">
                        <div class="receipe-content">
                            <a href=<?='?recipeID='.$result['Id_recette'] ?>>
                                <h5><?=$result['Name_recette'] ?></h5>
                            </a>
                        </div>
                    </div>
                </div>

                <?php } ?>
            </div>
        </div>
</section>



<?php $content = ob_get_clean(); ?>

<?php require('templates/template.php'); ?>