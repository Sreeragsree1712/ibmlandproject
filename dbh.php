<?php
  $conn = mysqli_connect("localhost","root","","land");
  if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
?>
