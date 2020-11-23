<?php
require_once('public/connect.php');

class Recette extends Databases{
    
    /**
     * recettes
     * SELECT ALL RECIPES METHOD
     * @return void
     */
    public function recettes(){
        $recette = $this->connect()->prepare('SELECT * FROM recette');
        $recette->execute();
        $result = $recette->fetchALL(PDO::FETCH_ASSOC);
        return $result;
     }
    
    /**
     * recipe
     * SELECT A RECIPE BY ID METHOD
     * @param  mixed $recipeID
     * @return void
     */
    public function recipe($recipeID){
        $recette = $this->connect()->prepare('SELECT * FROM recette WHERE id_recette='.$recipeID.'');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }
     
     /**
      * daysRecipe
      * SELECT RAND RECIPE METHOD 1
      * @return void
      */
     public function daysRecipe(){
        $recette = $this->connect()->prepare('SELECT * FROM recette ORDER BY RAND()
        LIMIT 6');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }
     
     /**
      * daysRecipe2
      * SELECT RAND RECIPE METHOD 2 
      * @return void
      */
     public function daysRecipe2(){
        $recette = $this->connect()->prepare('SELECT * FROM recette ORDER BY RAND()
        LIMIT 6');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }
     
     /**
      * daysRecipe3
      * SELECT RAND RECIPE METHOD 3
      * @return void
      */
     public function daysRecipe3(){
        $recette = $this->connect()->prepare('SELECT * FROM recette ORDER BY RAND()
        LIMIT 6');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }
          
     /**
      * ingredient
      * SELECT ALL INGREDIENT BY RECIPE ID METHOD
      * @param  mixed $recipeID
      * @return void
      */
     public function ingredient($recipeID){
        $recette = $this->connect()->prepare('SELECT ing1_ingredient, ing2_ingredient, ing3_ingredient, ing4_ingredient, ing5_ingredient,
        ing6_ingredient, ing7_ingredient, ing8_ingredient, ing9_ingredient, ing10_ingredient
        FROM ingredient WHERE id_recette_ingredient='.$recipeID.'');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }
          
     /**
      * tquantity
      * SELECT TOTAL QUANTITY OF INGREDIENT BY RECIPE ID METHOD
      * @param  mixed $recipeID
      * @return void
      */
     public function tquantity($recipeID){
        $recette = $this->connect()->prepare('SELECT tqty1, tqty2, tqty3, tqty4, tqty5,
        tqty6
        FROM ingredient WHERE id_recette_ingredient='.$recipeID.'');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }
          
     /**
      * qid
      * SELECT ID OF INGREDIENT TABLE METHOD
      * @param  mixed $recipeID
      * @return void
      */
     public function qid($recipeID){
        $recette = $this->connect()->prepare('SELECT id_recette_ingredient
        FROM ingredient WHERE id_recette_ingredient='.$recipeID.'');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }
          
     /**
      * bquantity
      * SELECT INITIAL QUANTITY OF INGREDIENT BY ID METHOD
      * @param  mixed $recipeID
      * @return void
      */
     public function bquantity($recipeID){
        $recette = $this->connect()->prepare('SELECT qty1, qty2, qty3, qty4, qty5, qty6
        FROM ingredient WHERE id_recette_ingredient='.$recipeID.'');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;       
     }
     
     /**
      * service
      * SELECT SRV (NUMBER OF PEOPLE) BY ID METHOD
      * @param  mixed $recipeID
      * @return void
      */
     public function service($recipeID){
        $recette = $this->connect()->prepare('SELECT srv
        FROM ingredient WHERE id_recette_ingredient='.$recipeID.'');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }
          
     /**
      * change
      * UPDATE QUANTITY OF INGREDIENT BY SRV NUMBER METHOD
      * @return void
      */
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
     
     /**
      * directive
      * SELECT DIRECTIVE BY ID METHOD
      * @param  mixed $recipeID
      * @return void
      */
     public function directive($recipeID){
        $recette = $this->connect()->prepare('SELECT dir1_directive, dir2_directive, dir3_directive, dir4_directive, dir5_directive,
        dir6_directive, dir7_directive, dir8_directive, dir9_directive, dir10_directive FROM directive WHERE Id_recette_directive='.$recipeID.'');
        $recette->execute();
        $result = $recette->fetch(PDO::FETCH_ASSOC);
        return $result;
     }
     
     /**
      * searchR
      * SEARCH BAR METHOD
      * @return void
      */
     public function searchR(){
      $recherche = isset($_POST['Recette']) ? $_POST['Recette'] : '';
      $ilike = isset($_POST['ilike']) ? $_POST['ilike'] : '';
      $idontlike = isset($_POST['idontlike']) ? $_POST['idontlike'] : '';
         if($recherche && $ilike && $idontlike){
            $q = $this->connect()->prepare(
            "SELECT Name_recette,img_recette,Id_recette,ing1_ingredient,ing2_ingredient, 
            ing3_ingredient,ing4_ingredient,ing5_ingredient,ing6_ingredient FROM ingredient
            INNER JOIN recette ON recette.Id_Ingredient = ingredient.Id_recette_ingredient
            WHERE Name_recette LIKE '%$recherche%'
            OR ing1_ingredient LIKE '%$ilike%' OR ing2_ingredient LIKE '%$ilike%'
            OR ing3_ingredient LIKE '%$ilike%' OR ing4_ingredient LIKE '%$ilike%'
            OR ing5_ingredient LIKE '%$ilike%' OR ing6_ingredient LIKE '%$ilike%'
            AND ing1_ingredient NOT LIKE '%$idontlike%' AND ing2_ingredient NOT LIKE '%$idontlike%'
            AND ing3_ingredient NOT LIKE '%$idontlike%' AND ing4_ingredient NOT LIKE '%$idontlike%'
            AND ing5_ingredient NOT LIKE '%$idontlike%' AND ing6_ingredient NOT LIKE '%$idontlike%'
            LIMIT 10");
            $q->execute();
            $q = $q->fetchALL(PDO::FETCH_ASSOC);
            return $q;
         }else if($recherche && $ilike && empty($_POST['idontlike'])){
            $q = $this->connect()->prepare(
               "SELECT Name_recette,img_recette,Id_recette,ing1_ingredient,ing2_ingredient, 
               ing3_ingredient,ing4_ingredient,ing5_ingredient,ing6_ingredient FROM ingredient
               INNER JOIN recette ON recette.Id_Ingredient = ingredient.Id_recette_ingredient
               WHERE Name_recette LIKE '%$recherche%'
               OR ing1_ingredient LIKE '%$ilike%' OR ing2_ingredient LIKE '%$ilike%'
               OR ing3_ingredient LIKE '%$ilike%' OR ing4_ingredient LIKE '%$ilike%'
               OR ing5_ingredient LIKE '%$ilike%' OR ing6_ingredient LIKE '%$ilike%'
               LIMIT 10");
               $q->execute();
               $q = $q->fetchALL(PDO::FETCH_ASSOC);
               return $q;
         }else if($recherche && empty($_POST['ilike']) && $idontlike){
            $q = $this->connect()->prepare(
               "SELECT Name_recette,img_recette,Id_recette,ing1_ingredient,ing2_ingredient, 
               ing3_ingredient,ing4_ingredient,ing5_ingredient,ing6_ingredient FROM ingredient
               INNER JOIN recette ON recette.Id_Ingredient = ingredient.Id_recette_ingredient
               WHERE Name_recette LIKE '%$recherche%'
               AND ing1_ingredient NOT LIKE '%$idontlike%' AND ing2_ingredient NOT LIKE '%$idontlike%'
               AND ing3_ingredient NOT LIKE '%$idontlike%' AND ing4_ingredient NOT LIKE '%$idontlike%'
               AND ing5_ingredient NOT LIKE '%$idontlike%' AND ing6_ingredient NOT LIKE '%$idontlike%'
               LIMIT 10");
               $q->execute();
               $q = $q->fetchALL(PDO::FETCH_ASSOC);
               return $q;
         }else if($recherche && empty($_POST['ilike']) && empty($_POST['idontlike'])){
            $q = $this->connect()->prepare(
               "SELECT Name_recette,img_recette,Id_recette,ing1_ingredient,ing2_ingredient, 
               ing3_ingredient,ing4_ingredient,ing5_ingredient,ing6_ingredient FROM ingredient
               INNER JOIN recette ON recette.Id_Ingredient = ingredient.Id_recette_ingredient
               WHERE Name_recette LIKE '%$recherche%'
               LIMIT 10");
               $q->execute();
               $q = $q->fetchALL(PDO::FETCH_ASSOC);
               return $q;
         }else if(empty($_POST['recherche']) && empty($_POST['ilike']) && $idontlike){
            $q = $this->connect()->prepare(
               "SELECT Name_recette,img_recette,Id_recette,ing1_ingredient,ing2_ingredient, 
               ing3_ingredient,ing4_ingredient,ing5_ingredient,ing6_ingredient FROM ingredient
               INNER JOIN recette ON recette.Id_Ingredient = ingredient.Id_recette_ingredient
               WHERE Name_recette LIKE '%$recherche%'
               AND ing1_ingredient NOT LIKE '%$idontlike%' AND ing2_ingredient NOT LIKE '%$idontlike%'
               AND ing3_ingredient NOT LIKE '%$idontlike%' AND ing4_ingredient NOT LIKE '%$idontlike%'
               AND ing5_ingredient NOT LIKE '%$idontlike%' AND ing6_ingredient NOT LIKE '%$idontlike%'
               LIMIT 10");
               $q->execute();
               $q = $q->fetchALL(PDO::FETCH_ASSOC);
               return $q;
         }             
      }
    
    /**
     * searchI
     *
     * @return void
     */
    public function searchI(){
      $Ingredient1 = isset($_POST['Ingredient1']) ? $_POST['Ingredient1'] : '';
      $Ingredient2 = isset($_POST['Ingredient2']) ? $_POST['Ingredient2'] : '';
      $Ingredient3 = isset($_POST['Ingredient3']) ? $_POST['Ingredient3'] : '';

      if($Ingredient1 && $Ingredient2 && $Ingredient3){
         $q = $this->connect()->prepare(
            "SELECT Name_recette,img_recette,Id_recette,ing1_ingredient,ing2_ingredient, 
            ing3_ingredient,ing4_ingredient,ing5_ingredient,ing6_ingredient FROM ingredient
            INNER JOIN recette ON recette.Id_Ingredient = ingredient.Id_recette_ingredient
            WHERE
            ing1_ingredient LIKE '%$Ingredient1%' OR ing2_ingredient LIKE '%$Ingredient1%'
            OR ing3_ingredient LIKE '%$Ingredient1%' OR ing4_ingredient LIKE '%$Ingredient1%'
            OR ing5_ingredient LIKE '%$Ingredient1%' OR ing6_ingredient LIKE '%$Ingredient1%'
            OR ing1_ingredient LIKE '%$Ingredient2%' OR ing2_ingredient LIKE '%$Ingredient2%'
            OR ing3_ingredient LIKE '%$Ingredient2%' OR ing4_ingredient LIKE '%$Ingredient2%'
            OR ing5_ingredient LIKE '%$Ingredient2%' OR ing6_ingredient LIKE '%$Ingredient2%'
            OR ing1_ingredient LIKE '%$Ingredient3%' OR ing2_ingredient LIKE '%$Ingredient3%'
            OR ing3_ingredient LIKE '%$Ingredient3%' OR ing4_ingredient LIKE '%$Ingredient3%'
            OR ing5_ingredient LIKE '%$Ingredient3%' OR ing6_ingredient LIKE '%$Ingredient3%'
            LIMIT 10");
            $q->execute();
            $q = $q->fetchALL(PDO::FETCH_ASSOC);
            return $q;
      }else if($Ingredient1 && $Ingredient2 && empty($_POST['Ingredient3'])){
         $q = $this->connect()->prepare(
            "SELECT Name_recette,img_recette,Id_recette,ing1_ingredient,ing2_ingredient, 
            ing3_ingredient,ing4_ingredient,ing5_ingredient,ing6_ingredient FROM ingredient
            INNER JOIN recette ON recette.Id_Ingredient = ingredient.Id_recette_ingredient
            WHERE
            ing1_ingredient LIKE '%$Ingredient1%' OR ing2_ingredient LIKE '%$Ingredient1%'
            OR ing3_ingredient LIKE '%$Ingredient1%' OR ing4_ingredient LIKE '%$Ingredient1%'
            OR ing5_ingredient LIKE '%$Ingredient1%' OR ing6_ingredient LIKE '%$Ingredient1%'
            OR ing1_ingredient LIKE '%$Ingredient2%' OR ing2_ingredient LIKE '%$Ingredient2%'
            OR ing3_ingredient LIKE '%$Ingredient2%' OR ing4_ingredient LIKE '%$Ingredient2%'
            OR ing5_ingredient LIKE '%$Ingredient2%' OR ing6_ingredient LIKE '%$Ingredient2%'
            LIMIT 10");
            $q->execute();
            $q = $q->fetchALL(PDO::FETCH_ASSOC);
            return $q;
      }else if($Ingredient1 && empty($_POST['Ingredient2']) && empty($_POST['Ingredient3'])){
         $q = $this->connect()->prepare(
            "SELECT Name_recette,img_recette,Id_recette,ing1_ingredient,ing2_ingredient, 
            ing3_ingredient,ing4_ingredient,ing5_ingredient,ing6_ingredient FROM ingredient
            INNER JOIN recette ON recette.Id_Ingredient = ingredient.Id_recette_ingredient
            WHERE
            ing1_ingredient LIKE '%$Ingredient1%' OR ing2_ingredient LIKE '%$Ingredient1%'
            OR ing3_ingredient LIKE '%$Ingredient1%' OR ing4_ingredient LIKE '%$Ingredient1%'
            OR ing5_ingredient LIKE '%$Ingredient1%' OR ing6_ingredient LIKE '%$Ingredient1%'
            LIMIT 10");
            $q->execute();
            $q = $q->fetchALL(PDO::FETCH_ASSOC);
            return $q;
      }else if(empty($_POST['Ingredient1']) && $Ingredient2 && empty($_POST['Ingredient3'])){
         $q = $this->connect()->prepare(
            "SELECT Name_recette,img_recette,Id_recette,ing1_ingredient,ing2_ingredient, 
            ing3_ingredient,ing4_ingredient,ing5_ingredient,ing6_ingredient FROM ingredient
            INNER JOIN recette ON recette.Id_Ingredient = ingredient.Id_recette_ingredient
            WHERE
            ing1_ingredient LIKE '%$Ingredient2%' OR ing2_ingredient LIKE '%$Ingredient2%'
            OR ing3_ingredient LIKE '%$Ingredient2%' OR ing4_ingredient LIKE '%$Ingredient2%'
            OR ing5_ingredient LIKE '%$Ingredient2%' OR ing6_ingredient LIKE '%$Ingredient2%'
            LIMIT 10");
            $q->execute();
            $q = $q->fetchALL(PDO::FETCH_ASSOC);
            return $q;
      }else if(empty($_POST['Ingredient1']) && empty($_POST['Ingredient2']) && $Ingredient3){
         $q = $this->connect()->prepare(
            "SELECT Name_recette,img_recette,Id_recette,ing1_ingredient,ing2_ingredient, 
            ing3_ingredient,ing4_ingredient,ing5_ingredient,ing6_ingredient FROM ingredient
            INNER JOIN recette ON recette.Id_Ingredient = ingredient.Id_recette_ingredient
            WHERE
            ing1_ingredient LIKE '%$Ingredient3%' OR ing2_ingredient LIKE '%$Ingredient3%'
            OR ing3_ingredient LIKE '%$Ingredient3%' OR ing4_ingredient LIKE '%$Ingredient3%'
            OR ing5_ingredient LIKE '%$Ingredient3%' OR ing6_ingredient LIKE '%$Ingredient3%'
            LIMIT 10");
            $q->execute();
            $q = $q->fetchALL(PDO::FETCH_ASSOC);
            return $q;
      }else{

      }
   }
      
      /**
       * likke
       * INCREMENTE LIKE
       * @param  mixed $recipeID
       * @return void
       */
      public function likke($recipeID){   
         if(isset($_POST['like']) && $_POST['like']=="1"){
            $delai = 0.1;
            $recette = $this->connect()->prepare('UPDATE recette SET likes = likes + 1 WHERE Id_recette ='.$recipeID.'');
            $recette->execute();
            $recette = header("Refresh:$delai;");                 
            return $recette;
            }
      }

            /**
       * likke
       * INCREMENTE DISLIKE
       * @param  mixed $recipeID
       * @return void
       */
      public function dislikke($recipeID){   
         if(isset($_POST['dislike']) && $_POST['dislike']=="1"){
            $delai = 0.1;
            $recette = $this->connect()->prepare('UPDATE recette SET dislikes = dislikes + 1 WHERE Id_recette ='.$recipeID.'');
            $recette->execute();
            $recette = header("Refresh:$delai;");                 
            return $recette;
            }
      }


}