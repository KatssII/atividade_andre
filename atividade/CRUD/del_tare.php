<?php
    require('../conn.php');

   if( isset($_GET['lista'])){
        $lista = $_GET['lista'];
   }else{
        header("Location: ../index_tare.php");
   }

   $del_tare = $pdo->prepare('DELETE FROM lista WHERE id_tare=:lista');
   $del_tare->execute(array(':lista'=>$lista));  
?>