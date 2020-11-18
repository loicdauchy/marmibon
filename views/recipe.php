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
                            <div style="display:flex;">
                            <!-- Custom Checkbox -->
                            <h4 style="display:flex; flex-direction:column; width:20px; color:#40ba37;">
                            <?php
                                foreach($quantity as $qty){                                        
                            ?>                            
                                <?= $qty."<br>"?>
                            <?php 
                            }
                            ?>
                            </h4>
                            <h4 style="display:flex; flex-direction:column;">
                            <?php
                               foreach($ingredient as $ing){                               
                            ?>                            
                               <?= $ing."<br>"?>                     
                            <?php
                                }
                            ?>
                            </h4>
                            </div>
                        </div>
                    </div>
                </div>

               

                
            </div>
        </div>
    </div>


    <?php $content = ob_get_clean(); ?>

<?php require('templates/template.php'); ?>