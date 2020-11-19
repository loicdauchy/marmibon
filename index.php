<?php
require('controllers/controller.php');

// if (isset($_GET['recipeID'])) {
//     echo singleRecipe();
//     }else if(isset($_GET['recipeID=1'])) {  
//         echo singleRecipe();
//         }else if(isset($_GET['recipes'])) {  
//             echo recipes();
//             }else if(isset($_GET['dayRecipes'])) {  
//                 echo randRecipe();
//                 }else if(isset($_GET['home'])){
//                 echo testView();
//                 }else {
//                 echo testView();
//             }

if (isset($_GET['recipeID'])) {
    echo singleRecipe();
    }else if(isset($_GET['recipeID=1'])) {
    echo singleRecipe();
    }else if(isset($_GET['recipes'])) {
    echo recipes();
    }else if(isset($_GET['dayRecipes'])) {
    echo randRecipe();
    }else if(isset($_GET['home'])){
    echo testView();
    } else if (isset($_POST['selectrecipe'])) { 
    echo search();
    }  
    else {
    echo testView();
    }

// if (isset($_POST['selectrecipe'])) {
//     search();
//     }else {
    
//     recipes();
//     }
require_once ('templates/template.php');