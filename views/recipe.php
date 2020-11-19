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
                
                            <p style="color:#474747; font-size:1.2rem;font-weight:bold"> <?=$dir?> </p>
                        </div>

                        <?php
                            }
                        ?>
                    </div>

                    <!-- Ingredients -->
                    <div class="col-12 col-lg-4">
                        <div class="ingredients">
                            <h4>Ingrédients:</h4>

                            <form action="" method="POST" class="d-flex flex-column w-75">
                            <input style="border:1px solid #40ba37; color:#40ba37;height:40px;font-size:1.5rem" type="number" name="srv" value="<?=$service['srv']?>">
                            <button class="btn btn-success" type="submit" value="ajouter" name="action">Changer</button>
                            
                            <div style="display:flex;">
                            <!-- Custom Checkbox -->
                            <?php
                                foreach($qid as $id){                                        
                            ?>                            
                                <?= "<input type='hidden' name='qid' value='".$id."'<br>"?>
                            <?php 
                            }
                            ?>
                                
                                <?= "<input type='hidden' name='bqty' value='".$bquantity['qty1']."'<br>"?>
                                <?= "<input type='hidden' name='bqty2' value='".$bquantity['qty2']."'<br>"?>
                                <?= "<input type='hidden' name='bqty3' value='".$bquantity['qty3']."'<br>"?>
                                <?= "<input type='hidden' name='bqty4' value='".$bquantity['qty4']."'<br>"?>
                                <?= "<input type='hidden' name='bqty5' value='".$bquantity['qty5']."'<br>"?>
                                <?= "<input type='hidden' name='bqty6' value='".$bquantity['qty6']."'<br>"?>
                          
                            </form>
                            
                            
                            <h4 class="tqty" style="display:flex; flex-direction:column; width:50px; color:#40ba37;">
                            <?php
                                foreach($tquantity as $tqty){                                        
                            ?>                            
                                <?= $tqty."<br>"?>
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