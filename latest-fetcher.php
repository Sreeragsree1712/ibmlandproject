<?php
include 'dbh.php';


  $im = "SELECT * FROM land" ;
  $records = mysqli_query($conn,$im);
  $count = mysqli_num_rows($records);


  $i=$count;
  $j=$count-3;
  $newim = "SELECT * FROM land WHERE lno BETWEEN '$j' AND '$i'" ;
  $newrecords = mysqli_query($conn,$newim);
    while($fetchr = mysqli_fetch_assoc($newrecords)){

      ?>

      <form action='land.php' method='POST'>

      </form>

<?php
    }

    ?>
