<?php
require('models/model.php');


function testView()
{
    require('views/home.php');
}

function testView2()
{
    require('views/recipe.php');
}

function recipes(){
    $allRecipe = new Recette();
    $allRecipe = $allRecipe->recettes();
    require('views/recipes.php');
}

function singleRecipe(){
    $recipe = new Recette();
    $recipe = $recipe->recipe($_GET['recipeID']);
    require('views/recipe.php');
}