<?php $title = 'Recette'; ?>

<?php ob_start(); ?>
 
 
 <!-- ##### Breadcumb Area Start ##### -->
 <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(public/img/bg-img/breadcumb3.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-text text-center">
                        <h2>Recette</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <div class="receipe-post-area section-padding-80">

        <!-- Receipe Post Search -->
        <div class="receipe-post-search mb-80">
            <div class="container">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <select name="select1" id="select1">
                                <option value="1">All Receipies Categories</option>
                                <option value="1">All Receipies Categories 2</option>
                                <option value="1">All Receipies Categories 3</option>
                                <option value="1">All Receipies Categories 4</option>
                                <option value="1">All Receipies Categories 5</option>
                            </select>
                        </div>
                        <div class="col-12 col-lg-3">
                            <select name="select1" id="select2">
                                <option value="1">All Receipies Categories</option>
                                <option value="1">All Receipies Categories 2</option>
                                <option value="1">All Receipies Categories 3</option>
                                <option value="1">All Receipies Categories 4</option>
                                <option value="1">All Receipies Categories 5</option>
                            </select>
                        </div>
                        <div class="col-12 col-lg-3">
                            <input type="search" name="search" placeholder="Search Receipies">
                        </div>
                        <div class="col-12 col-lg-3 text-right">
                            <button type="submit" class="btn delicious-btn">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Receipe Slider -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="receipe-slider owl-carousel">
                        <img style="height:60vh;" src="<?=$recipe['img_recette']?>" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- Receipe Content Area -->
        <div class="receipe-content-area">
            <div class="container">

                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="receipe-headline my-5">
                            <span>April 05, 2018</span>
                            <h2><?=$recipe['Name_recette'] ?></h2>
                            <div class="receipe-duration">
                                <h6>Prép: <?=$recipe['time_recette']?></h6>
                                <h6>Quantités: <?=$recipe['number_recette']?> personnes</h6>
                                <h6>Niveau: <?=$recipe['level_recette']?></h6>
                                <h6>Coûts: <?=$recipe['cost_recette']?></h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-8">
                        <!-- Single Preparation Step -->
                        <?php
                            foreach($directive as $dir){
                        ?>
                        <div class="single-preparation-step d-flex">
                            <p> <?=$dir?> </p>
                        </div>

                        <?php
                            }
                        ?>
                    </div>

                    <!-- Ingredients -->
                    <div class="col-12 col-lg-4">
                        <div class="ingredients">
                            <h4>Ingrédients:</h4>
                            <!-- Custom Checkbox -->
                            <?php
                                foreach($ingredient as $ing){
                            ?>
                            <div>
                                
                                <h4><?= $ing?></h4>
                            </div>
                            <?php
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>

               

                
            </div>
        </div>
    </div>


    <?php $content = ob_get_clean(); ?>

<?php require('templates/template.php'); ?>