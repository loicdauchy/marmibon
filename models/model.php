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
     public function tquantity($recipeID){
        $recette = $this->connect()->prepare('SELECT tqty1, tqty2, tqty3, tqty4, tqty5,
        tqty6
        FROM ingredient WHERE id_recette_ingredient='.$recipeID.'');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }
     public function qid($recipeID){
        $recette = $this->connect()->prepare('SELECT id_recette_ingredient
        FROM ingredient WHERE id_recette_ingredient='.$recipeID.'');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }
     public function bquantity($recipeID){
        $recette = $this->connect()->prepare('SELECT qty1, qty2, qty3, qty4, qty5, qty6
        FROM ingredient WHERE id_recette_ingredient='.$recipeID.'');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
        
     }

     public function service($recipeID){
        $recette = $this->connect()->prepare('SELECT srv
        FROM ingredient WHERE id_recette_ingredient='.$recipeID.'');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }
     public function change(){
        if(isset($_POST['action']) && $_POST['action']=="ajouter" && !empty($_POST['srv'])) {
        $srv = $_POST['srv'];
        $qid = $_POST['qid'];
        $bqty = $_POST['bqty'];
        $bqty2 = $_POST['bqty2'];
        $bqty3 = $_POST['bqty3'];
        $bqty4 = $_POST['bqty4'];
        $bqty5 = $_POST['bqty5'];
        $bqty6 = $_POST['bqty6'];


        $delai=0.1;
        
  
        $tqty = $srv * $bqty;
        $tqty2 = $srv * $bqty2;
        $tqty3 = $srv * $bqty3;
        $tqty4 = $srv * $bqty4;
        $tqty5 = $srv * $bqty5;
        $tqty6 = $srv * $bqty6;
            
        $change = $this->connect()->prepare('UPDATE ingredient SET srv = :srv, tqty1 = :tqty1, tqty2 = :tqty2, tqty3 = :tqty3,
        tqty4 = :tqty4, tqty5 = :tqty5, tqty6 = :tqty6 
        
        WHERE id_recette_ingredient =:id');
        $change->bindParam(':id', $qid, PDO::PARAM_STR);
        $change->bindParam(':srv', $srv, PDO::PARAM_STR);
        $change->bindParam(':tqty1', $tqty, PDO::PARAM_STR);
        $change->bindParam(':tqty2', $tqty2, PDO::PARAM_STR);
        $change->bindParam(':tqty3', $tqty3, PDO::PARAM_STR);
        $change->bindParam(':tqty4', $tqty4, PDO::PARAM_STR);
        $change->bindParam(':tqty5', $tqty5, PDO::PARAM_STR);
        $change->bindParam(':tqty6', $tqty6, PDO::PARAM_STR);                            
        $change = $change->execute();        
        $change= header("Refresh:$delai;");
        return $change;
        
        
      }
    }

     public function directive($recipeID){
        $recette = $this->connect()->prepare('SELECT dir1_directive, dir2_directive, dir3_directive, dir4_directive, dir5_directive,
        dir6_directive FROM directive WHERE Id_recette_directive='.$recipeID.'');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }

     public function searchR(){


        if (isset($_POST['selectrecipe']) && !empty($_POST['Ingredient1']))
        {
        $query=preg_replace("#[^a-zA-Z ?0-9]#i", "" ,$_POST['Ingredient1']);
        // $queryCases = array("with_any_one_of","with_the_exact_of","without","starts_with");
        //if(in_array($k,$queryCases)) {
        
        $recette = $this->connect()->prepare('SELECT Name_recette,img_recette,Id_recette FROM recette WHERE Name_recette LIKE ?');
        
        $recette->execute(array($query));
        $recette = $recette->fetchAll(PDO::FETCH_ASSOC);
        
        
        return $recette;
        
        }
        
        }
}