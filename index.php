<?php
require('controllers/controller.php');

if (isset($_GET['recipeID'])) {
    echo singleRecipe();
 }else {  
         echo recipes();
     }
require_once ('templates/template.php');