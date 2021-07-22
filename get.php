<?php 
    $sql_quary = "SELECT `username`, `repassword` FROM `players` WHERE 1;";

    if (mysqli_query($conn, $sql_quary)) {
      header('Location:error.php');
       
      } else {
        header('Location:game.html');
      }
    
    
    mysqli_close($conn);

?>