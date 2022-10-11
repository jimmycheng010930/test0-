<?php
require_once("db.php") ;
session_start() ;

$a = $_POST['username'] ;
$sql = "SELECT * FROM tutenti WHERE username= '$a' " ;

$rec = mysqli_query($db_remoto,$sql) or die($sql."<br>".mysqli_error($db_remoto));
$num = mysqli_num_rows($rec);
if($num!=0) {

  while($array=mysqli_fetch_array($rec)) {
      if ($_POST['username'] == $array['username'] && $_POST['password'] == $array['password']) {
        $_SESSION["name"] = $array['nome'] ;
        header("location: index.php") ;
        exit() ;

      }else {
          header("Location: login.php");

      }
}

    }

 ?>
