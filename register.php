<?php 
    include ('connection.php');
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $repassword = $_POST['repassword'];

    $sql_quary = "INSERT INTO `players` (`id`, `fullname`, `username`, `repassword`) VALUES (NULL, '$fullname', '$username', '$repassword');";

if (mysqli_query($conn, $sql_quary)) {
   header('Location: login.php');
  } else {
    header('Location: error.php');
  }


mysqli_close($conn);

?>