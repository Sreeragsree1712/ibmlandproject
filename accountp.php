<?php
session_start();

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title>Land Registration Portal-Account</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>
   <body>
     <header>

         <nav class="navbar navbar-expand-md navbar-dark bg-dark">
             <a href="homepage.php" class="navbar-brand"> </a>
             <span class="navbar-text" style='font-size: 30px; margin-right: 30px'>Land Registration Portal</span>

             <ul class="navbar-nav">

               <li class="nav-item" style='font-size: 20px; margin-right: 30px'> <a href="homepage.php" class="nav-link">Home</a> </li>

               <li class="nav-item" style='font-size: 20px; margin-right: 30px'> <a href="logout.php" class="nav-link">Logout</a> </li>
             </ul>


         </nav>

      </header>

      <div class="container">
        <?php
              include 'dbh.php';
              $id = $_SESSION['id'];
              $sql = "SELECT * FROM user1 WHERE id = $id ";
              $newrecords = mysqli_query($conn,$sql);
              $result = mysqli_fetch_assoc($newrecords);
              ?>

      <form  action='update.php' method='POST'>

          <br><br><input type='text' class='form-control' placeholder='Enter full name' name='fname' value='<?php echo($result['name']) ?>'>
          <br>
          <input type='text' class='form-control' placeholder='Enter mobile number' name='phn' value='<?php echo($result['phone']) ?>'>
          <br>
          <label><b>Date of Birth : </b></label>
          <input type='text' class='from-control' placeholder='Enter Date of Birth' name='dob' value='<?php echo($result['DOB']) ?>'><br>

              <div class='signupbutton'>
                <br><br>
                <button type='submit' class='btn btn-success' name='sub' value='submit'>Update Details</button>

              </div>
              </form>


              <br><br>
              <label><b>Email Id : <?php echo($result['email']) ?> </label>
              <br><br>
              <form class='' action='updatep.php' method='post'>
                <input type='password' class='form-control' placeholder='Enter old password' name='oldp'><br>
                <input type='password' class='form-control' placeholder='Enter new password' name='newp'><br>
                <button type='submit' class='btn btn-success ' name='subpass' value='submit'>Update Password</button><br>
              </form>




      </div>

    </body>

  </html>
