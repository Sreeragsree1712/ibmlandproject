<?php
include 'dbh.php';
if(isset($_POST['submit'])){

    $option = $_POST['option'];
    $text =  strtolower($_POST['textoption']);
    $person = $_SESSION['id'];

    $found = "SELECT * FROM land WHERE $option LIKE '$text%'";
    $display = mysqli_query($conn,$found);

  start:
  $i=0;
  ?>

  <div class='row'>

  <?php
    while($final = mysqli_fetch_assoc($display)){
  ?>

      

      <?php
      if ($i==4) {

        echo"</div>";

        goto start;
      }
      $i++;
    }
    echo"</div>";

  }


 ?>
