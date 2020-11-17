<?php
require('controllers/controller.php');

if (isset($_GET['recipeID'])) {
    echo singleRecipe();
 }else {  
         echo recipes();
     }

// echo randRecipe();
// echo testView();
require_once ('templates/template.php');