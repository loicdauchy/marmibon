<?php
require_once('public/connect.php');


class Recette extends Databases{

    public function recettes(){
        $recette = $this->connect()->prepare('SELECT * FROM recette');
        $recette->execute();
        $result = $recette->fetchALL(PDO::FETCH_ASSOC);
        return $result;
     }

    public function recipe($recipeID){
        $recette = $this->connect()->prepare('SELECT * FROM recette WHERE id_recette='.$recipeID.'');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }

     public function daysRecipe(){
        $recette = $this->connect()->prepare('SELECT * FROM recette ORDER BY RAND()
        LIMIT 6');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }

     public function daysRecipe2(){
        $recette = $this->connect()->prepare('SELECT * FROM recette ORDER BY RAND()
        LIMIT 6');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }

     public function daysRecipe3(){
        $recette = $this->connect()->prepare('SELECT * FROM recette ORDER BY RAND()
        LIMIT 6');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }
     public function ingredient($recipeID){
        $recette = $this->connect()->prepare('SELECT ing1_ingredient, ing2_ingredient, ing3_ingredient, ing4_ingredient, ing5_ingredient,
        ing6_ingredient, ing7_ingredient, ing8_ingredient, ing9_ingredient, ing10_ingredient
        FROM ingredient WHERE id_recette_ingredient='.$recipeID.'');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }
     public function directive($recipeID){
        $recette = $this->connect()->prepare('SELECT dir1_directive, dir2_directive, dir3_directive, dir4_directive, dir5_directive,
        dir6_directive FROM directive WHERE Id_recette_directive='.$recipeID.'');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }
}