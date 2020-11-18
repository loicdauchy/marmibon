<?php ob_start(); ?>



<?php



 echo $search;


?>





<?php $content = ob_get_clean(); ?>

<?php require('templates/template.php'); ?>