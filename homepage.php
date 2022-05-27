<?php
session_start();

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Land Registration Portal-Homepage</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
  <body>
    <header>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="#" class="navbar-brand"> </a>
            <span class="navbar-text" style='font-size: 30px; margin-right: 30px'>Land Registration Portal</span>

            <ul class="navbar-nav">
              <li class='nav-item' style='font-size: 20px; margin-right: 30px'> <a href='account.php' class='nav-link'>Account</a> </li>

                  <li class='nav-item' style='font-size: 20px; margin-right: 30px'> <a href='logout.php' class='nav-link'>Logout</a> </li>
                  </ul>
                  </nav>
                  <div class='container-fluid'>
                  <br><br><br>

                  <?php
                  include 'dbh.php';
                  $id = $_SESSION['id'];
                  $quer = "SELECT * FROM user1 WHERE id = '$id' ";
                  $quer2 = "SELECT * FROM land WHERE lno in (SELECT lno from user1 where id = '$id') ";
                  $check = mysqli_query($conn,$quer);
                  $rel = mysqli_fetch_assoc($check);
                  $check2 = mysqli_query($conn,$quer2);
                  $rel2 = mysqli_fetch_assoc($check2);
                  ?>
                  
                  
                  <h1 style='color:black;position:sticky;'>WELCOME TO LAND REGISTRATION PORTAL </h1><b style = 'color: black;font-size: 25px'><i> <?php echo($rel['name']) ?></i></b>
                  <h4 style='color:black;position:sticky;'>Email:  <b style = 'color: black;font-size: 25px'><i> <?php echo($rel['email']) ?></i></b></h4>
                  <h4 style='color:black;position:sticky;'>Phone:  <b style = 'color: black;font-size: 25px'><i> <?php echo($rel['phone']) ?></i></b></h4>
                  <h4 style='color:black;position:sticky;'>Land Register Number : <b style = 'color: black;font-size: 25px'><i> <?php echo($rel['lno']) ?></i></b></h4>
              
                  
                
                </div>
                  </header>
                  <section>
                <div class='jumbotron' style='margin-top:15px;padding-top:30px;padding-bottom:30px;'>
                <div class='row'>
                 
                   <div class='col'>
                    <form action='search.php' method='POST'>

                      <input type='submit' name='submit' class='btn btn-success' style='display:inline;width:200px;margin-left:20px;margin-right:20px;margin-top:5px;' value='Search for owned land'/></h4>
                    </form>
                  </div>
                </div>
                </div>
      

  </section>
  <footer class="page-footer font-small blue">

   

  </footer>
  </body>
</html>
