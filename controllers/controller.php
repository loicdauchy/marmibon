<?php
require('models/model.php');


function testView()
{
    require('views/home.php');
}

function recipes(){
    $allRecipe = new Recette();
    $allRecipe = $allRecipe->recettes();
    require('views/recipes.php');
}

function singleRecipe(){
    $recipe = new Recette();
    $recipe = $recipe->recipe($_GET['recipeID']);
    $ingredient = new Recette();
    $ingredient = $ingredient->ingredient($_GET['recipeID']);
    $tquantity = new Recette();
    $tquantity = $tquantity->tquantity($_GET['recipeID']);
    $bquantity = new Recette();
    $bquantity = $bquantity->bquantity($_GET['recipeID']);
    $qid = new Recette();
    $qid = $qid->qid($_GET['recipeID']);
    $change = new Recette();
    $change = $change->change();
    $directive = new Recette();
    $directive = $directive->directive($_GET['recipeID']);
    $service = new Recette();
    $service = $service->service($_GET['recipeID']);
    require('views/recipe.php');
}

function randRecipe(){
    $RandRecipe = new Recette();
    $RandRecipe = $RandRecipe->daysRecipe();

    $RandRecipe2 = new Recette();
    $RandRecipe2 = $RandRecipe2->daysRecipe2();


    $RandRecipe3 = new Recette();
    $RandRecipe3 = $RandRecipe3->daysRecipe3();

    require('views/recipesday.php');
}

function search(){

    $search = new Recette();
    $search = $search->searchR();
    require('views/selectrecipe.php');
}

