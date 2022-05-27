<?php
include 'dbh.php';


  $im = "SELECT * FROM land ORDER BY loname ASC" ;
  $records = mysqli_query($conn,$im);

  start:
  $i=0;
  ?>

  <div class='row'>
    <?php
    while($result = mysqli_fetch_assoc($records)){
      ?>

      <?php
      if ($i==4) {

        echo"</div>";

        goto start;
      }
      $i++;
    }
    ?>
    </div>
