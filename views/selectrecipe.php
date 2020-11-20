<?php $title = 'Recherche'; ?>
<?php ob_start(); ?>
<section class="best-receipe-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Résultat de votre recherche :</h3>
                </div>
            </div>
        </div>
        <div class="receipe-post-search mb-80">
            <div class="container">
                <h4>Recherche par <span style="color: #ba3753;">Recette</span> :</h4>
                <form action="<?='?selectrecipe'?>" method="post">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <input type="search" name="Ingredient1" placeholder="Recette">
                        </div>
                        <div class="col-12 col-lg-3">
                            <input type="search" name="Ingredient2" placeholder="j'aime">
                        </div>
                        <div class="col-12 col-lg-3">
                            <input type="search" name="Ingredient3" placeholder="j'aime pas ">
                        </div>
                        <div class="col-12 col-lg-3 text-right">
                            <button type="submit" name="selectrecipe" value="recherche"
                                class="btn delicious-btn">Chercher</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="receipe-post-search mb-80">
            <div class="container">
                <h4>Recherche par <span style="color: #ba3753;">Ingrédients</span> :</h4>
                <form action="<?='?selectrecipe'?>" method="post">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <input type="search" name="Ingredient1" placeholder="Ingrédient">
                        </div>
                        <div class="col-12 col-lg-3">
                            <input type="search" name="Ingredient2" placeholder="Ingrédient">
                        </div>
                        <div class="col-12 col-lg-3">
                            <input type="search" name="search" placeholder="Ingrédient">
                        </div>
                        <div class="col-12 col-lg-3 text-right">
                            <button type="submit" name="selectrecipe" value="recherche"
                                class="btn delicious-btn">Chercher</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <!-- Single Best Receipe Area -->
            <?php foreach($search as $S){ ?>

            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-best-receipe-area mb-30">
                    <img src="<?=$S['img_recette'] ?>" alt="">
                    <div class="receipe-content">
                        <a href=<?='?recipeID='.$S['Id_recette'] ?>>
                            <h5><?=$S['Name_recette'] ?></h5>
                        </a>
                    </div>
                </div>
            </div>

            <?php } ?>
        </div>
</section>

<?php $content = ob_get_clean(); ?>

<?php require('templates/template.php'); ?>