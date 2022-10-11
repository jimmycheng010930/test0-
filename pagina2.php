
<?php
  ob_start() ;
  session_start() ;
  require_once("db.php") ;

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php


      if (isset($_SESSION["name"])) {
        // code...
      }else {
        header("Location: login.php ") ;
      }

     ?>

    <?php


      $naz = $_GET['id'];
      $sql = "SELECT * FROM topere where idNazionalita= $naz " ;

      $rec = mysqli_query($db_remoto,$sql) or die($sql."<br>".mysqli_error($db_remoto));
      $num = mysqli_num_rows($rec);
      $i = 1 ;
      if($num!=0) {
          while($array=mysqli_fetch_array($rec)) {
              $autore = $array['opera'];
              echo " $i) $autore <br>";
              $i++ ;
            }
          }

          //echo "<a href=\"index.php\"> ".indietro." </a> <br>";
     ?>

  </body>
</html>
