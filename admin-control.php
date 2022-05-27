<?php
session_start();
if (isset($_POST['upload'])) {

  include 'dbh.php';
  $loname = strtolower($_POST['loname']);
  $tax = $_POST['tax'];
  $place = strtolower($_POST['place']);
  $area = $_POST['area'];
  $ltype = $_POST['ltype'];
  

  $sql = "INSERT INTO land (loname, tax, place, area, ltype , imgpath)
    VALUES('$name','$price','$place','$area','$bedrooms','$image')";

  mysqli_query($conn,$sql);

}


?>
