
<?php
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

        $sql = "SELECT * FROM tcat";
        $rec = mysqli_query($db_remoto,$sql) or die($sql."<br>".mysqli_error($db_remoto));
        $num = mysqli_num_rows($rec);

        if($num!=0) {
            while($array=mysqli_fetch_array($rec)) {
                $autore = $array['nazionalita'];
                $id = $array["id"] ;
                echo "<a href=\"pagina2.php?id=$id\"  >"  .$autore."</a> <br>";
                //echo "<a href=\"pagina2.php\" method=\"POST\"  >"  .$autore."</a> <br>";
              }
            }

       ?>

  </body>
</html>
