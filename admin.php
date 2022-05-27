<?php
session_start();

 ?>


 <!DOCTYPE html>
 <head>
   <meta charset="utf-8">
   <title>Land Registration Portal-Admin</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 </head>
 <body>
   <header>
     <div class="container-fluid">
       <nav class="navbar navbar-expand-md navbar-dark bg-dark">
           <a href="homepage.php" class="navbar-brand"> </a>
           <span class="navbar-text" style='font-size: 30px; margin-right: 30px'>Land Registration Portal</span>

           <ul class="navbar-nav">
             <li class="nav-item" style='font-size: 20px; margin-right: 30px'> <a href="homepage.php" class="nav-link"> Home </a> </li>
             <li class="nav-item" style='font-size: 20px; margin-right: 30px'> <a href="logout.php" class="nav-link"> Logout</a> </li>

           </ul>

       </nav>

       <div class="container">

         <div class="jumbotron">
           <h1> Enter the Land details</h1>
           <p> <b></b> </p> <br>

           <form class="" action="admin-control.php" method="POST" enctype="multipart/form-data">

            <input type="text" class="form-control" placeholder="Land Owner Name" name="loname" value=""><br>
             <input type="text" class="form-control" placeholder="Land Tax" name="tax" value="">
             <br>
             <input type="text" class="form-control" placeholder="Place" name="place" value="">
             <br>
             <input type="number" class="form-control" placeholder="Area of Land" name="area" value="">
             <br>
             <input type="text" class="form-control" placeholder="Type of Land" name="ltype" value="">
             <br>
              <br><br>
             <div class="signupbutton">
               <input type="submit" class ="btn btn-success btn-lg" name="upload" value="Submit" >
             </div>


           </form>

        </div>


         </div>

       </div>


   </div>

 </header>
 <footer class="page-footer font-small blue">

 </footer>
   </body>
 </html>
